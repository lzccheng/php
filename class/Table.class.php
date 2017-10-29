<?php 
   /* 
    *Author:ZhangShixiong
    *Date：2017.4.11
    *Usage：Table类为所有数据表的父类，能够实现对数据表的CURD操作，可以对方法进行连贯操作(如$this->where()->order()->limit()->select())
    */
    class Table{
   	    protected $tablename;//保存表名
   	    protected $arrTable;//接受一个数组，该数组为insert语句提供数据
        protected $field="*";//查询字段
        protected $options=array();//
        protected $mysqli;//mysqli对象
        protected $rowCount=0;
        protected $result;//mysqli_result类对象
   	  function __construct($arrTable=''){
   	    	 $this->tablename=get_class($this);//获取当前的类名：即表名
   	  	   $this->arrTable=$arrTable;
           $this->mysqli=@new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);//$db是mysqli的 一个 对象。作用 ：1、连接  2、选择 要操作 的数据库 
     // var_dump($mysqli->connect_errno);
     // $mysqli->connect_errno会返回 连接过程中错误信息号，如果没有错误 返回0，否则返回非0的整数
         if ($this->mysqli->connect_errno) {
            die("连接错误".$this->mysqli->connect_error);//.$mysqli->connect_error输出具体的连接错误信息
         }
         // 第二步 
         $this->mysqli->set_charset("utf8");//设置 字符集 

   	  }
      // 执行插入命令
   	    function insert(){
   	  	    return $this->runSql($this->insertTable());
   	  	}
         private function insertTable(){
             $keys="(";
             $values="(";
             foreach ($this->arrTable as $key => $value) {
                $keys.=$key.",";
                $values.="'".$value."',";
             }
             $keys=substr($keys, 0,-1).")";
             $values=substr($values,0,-1).")";
             return  "insert into {$this->tablename} {$keys} values {$values}";
          }
      
      // 执行删除命令
      function del(){
        $sql="delete from {$this->tablename}";
        if (!empty($this->options["where"])){//如果带条件，则加上where条件
            $sql.=" where {$this->options["where"]}";  
        }
        return $this->runSql($sql);
      }

      // 执行修改命令
      function update(){
        $str="";
        foreach ($this->arrTable as $key => $value) {
            $str=$str.$key."='".$value."',";
        }
         $str=substr($str,0,-1);
         $sql="update {$this->tablename} set {$str}";
         if (!empty($this->options["where"])){//如果带条件，则加上where条件
             $sql.="  where {$this->options["where"]}";
         }
         return $this->runSql($sql);
      }
      
      // 设置查询字段,默认为所有字段
      function field($f="*"){
         $this->field=$f;
         return $this;
      }

      // 查询一条记录 返回一维数组或null
      function find(){
          $this->selectSql();
          return $this->result->fetch_assoc();
      }

      //返回二维数组或null  
      function select(){
          $this->selectSql();
          $rows=null;
          while ($row=$this->result->fetch_assoc()) {
            $rows[]=$row;
          }
          return $rows;
      }
      //生成查询语句  并得到结果对象
      function selectSql(){
           $sql="select {$this->field} from {$this->tablename}";
           if (!empty($this->options)) {//表示有参数
             if (isset($this->options["where"])) {
                $sql.=" where {$this->options["where"]} ";
             }
             if (isset($this->options["order"])) {
                $sql.=" order by {$this->options["order"]} ";
             }
             if (isset($this->options["limit"])) {
                $sql.=" limit {$this->options["limit"]} ";
             }
          }
         
          $this->result=$this->mysqli->query($sql);
          // return $result;
      }
      // 得到查询的记录数
      function  getSelectRow(){
          $this->selectSql();
          return $this->result->num_rows;
      }

      //运行insert、delete和insert语句 成功返回true 否则返回false
      private function runSql($sql){
          return $this->mysqli->query($sql);
      }
       
       // where条件方法 参数$where接受条件
      function where($where=''){
         $this->options["where"]=$where;
         return $this;  //返回一个对象。$this在类里面表示当前操作类
      }
      // order排序方法，参数接受排序参数
      function order($order){
         $this->options["order"]=$order;
         return $this;//返回一个对象。$this在类里面表示当前操作类
      }
      // limit方法，接受限制条件
      function limit($limit){
         $this->options["limit"]=$limit;
         return $this;//返回一个对象。$this在类里面表示当前操作类
      }


  }
       
   	  
   

 ?>

