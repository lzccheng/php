
<?php 

  class Page1{
    private $tableObject;  //$tableObject表示需要进行分页的表对象
    private $rowCount;//总记录数
    private $pageCount;//总页数
    private $pageSize;//每页显示的记录数
    private $nowPage;//当前页码
    private $id;
  	function __construct($tableObject){
      $this->tableObject=$tableObject;
      $this->rowCount=$this->tableObject->getSelectRow();
  	}

    // 该方法显示某一页的内容 ，需要知道表名 
    function showPage($nowPage,$pageSize,$id){
        $this->pageSize=$pageSize;
        $this->nowPage=$nowPage;
        $this->id=$id;
    	// Select * from 表名 limit ($nowPage-1)*$pageSize,$pageSize
      	$limit=($nowPage-1)*$pageSize;
      	$datas=$this->tableObject->where("userId='{$id}'")->limit("{$limit},{$pageSize}")->select();
      	return $datas;  //返回的是一个二维数组

    }
    // function showNav2()
    // 分页导航
    function showNav(){
    	// 得到总记录数
    	// $this->getRowCount();
    	// echo $this->rowCount;
    	$this->pageCount=ceil($this->rowCount/$this->pageSize);
    	echo "页次：";
    	echo $this->nowPage."/".$this->pageCount;
      echo "&nbsp;&nbsp;&nbsp;每页显示:{$this->pageSize}";
      echo "&nbsp;&nbsp;&nbsp;总记录数:{$this->rowCount}";
      $this->firstPage();
      $this->prePage();
      $this->nextPage();
      $this->lastPage();
      $this->toPage();

    }
    // 显示首页
    private function firstPage(){
       if ($this->nowPage<=1) {
          echo "&nbsp;&nbsp;&nbsp首页";
       }else{
          echo "&nbsp;&nbsp;&nbsp<a href='javascript:pagecha({$this->id},1)'>首页</a>";
       }
    }
    // 显示上一页
    private function prePage(){
       if ($this->nowPage<=1) {
          echo "&nbsp;&nbsp;&nbsp上一页";
       }else{
          $nowPage=$this->nowPage-1;
          echo "&nbsp;&nbsp;&nbsp<a href='javascript:pagecha({$this->id},{$nowPage})'>上一页</a>";
       }
    }
    // 显示下一页
     private function nextPage(){
       if ($this->nowPage>=$this->pageCount) {
          echo "&nbsp;&nbsp;&nbsp下一页";
       }else{
          $nowPage=$this->nowPage+1;
          echo "&nbsp;&nbsp;&nbsp<a href='javascript:pagecha({$this->id},{$nowPage})'>下一页</a>";
       }
    }
      // 显示尾页
     private function lastPage(){
       if ($this->nowPage>=$this->pageCount) {
          echo "&nbsp;&nbsp;&nbsp尾页";
       }else{
          echo "&nbsp;&nbsp;&nbsp<a href='pagecha({$this->id},{$this->pageCount})'>尾页</a>";
       }
    }
    private function getUrl(){
      return $_SERVER['PHP_SELF'];  //得到当前正在运行文件的绝对路径
    }
     
     // 显示下来列表框
    private function toPage(){

        echo "&nbsp;&nbsp;&nbsp;转到：<select style='width:60px;height:20px;font-size:12px;padding:0px;margin:0px;' name='' id='' 
               onchange=pagecha({$this->id},this.value)>";

        for ($i=1; $i <=$this->pageCount ; $i++) { 
           if ($this->nowPage==$i) {
            // $i=当前页码的时候，添加一个selected属性即可
            // selected属性表示被选中状态
             echo "<option value='{$i}' selected>第{$i}页</option>";  
           }else{
             echo "<option value='{$i}'>第{$i}页</option>";    
           }
        }  
         

        echo "</select>";
    }


  }
  



 ?>
 <!-- <select name="" id="">
   <option value="">1</option>
   <option value="">2</option>
   <option value=""  selected="">3</option>
   <option value="">4</option>
 </select> -->
 <!-- <input type="checkbox" name="" id="" checked="checked"> -->


 