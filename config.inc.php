<?php 
    // namespace Zhang;
    header("Content-Type:text/html;charset=utf-8");
    $basepath=$_SERVER['PHP_SELF']; 

    preg_match("/(\/)?([^\/]+)/",$basepath,$wjm); 

  
    // define("MPATH", )
 // 自动装载类文件的函数:当对象实例化的时候，如果没有加载类文件，就自动运行__autoload函数，并且会自动将类名传递给$className变量
    function __autoload($className){
    	// echo "yes";
    	$path=dirname(__FILE__);
    	include  "{$path}/class/".$className.".class.php";
    }

error_reporting(E_ALL^E_NOTICE^E_WARNING);//关闭错误信息提示
//禁用错误报告



define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'student');
define('DB_CHARSET', 'utf8');

// 定义报错模式
define('IS_DEBUG', true);

// 配置时区
define('TIME_ZONE', 'Asia/Shanghai');



//   echo "<pre>";
//   print_r($_SERVER);
//   echo "</pre>";

// exit;
    $GLOBALS['path'] = "/wl/";

  

    /*
      *执行成功函数success($Info,$url,$delay=3)
      参数说明：
      @param  string $url:执行成功跳转地址
      @param  string $info:成功显示的信息，默认为成功
      @param  int $delay :界面停留时间，默认为3s
    */
    function success($Info,$url,$delay=3){
         echo "
             <html>
                <head>    
                   <meta http-equiv ='refresh' content ={$delay};url='{$url}'/>
                   <style>
                   .success{text-align: left;margin-top: 30px;font-size:60px;background:url(imgs/smile.jpg) no-repeat;margin-left:30px;}
                   #href,#wait,span{margin-left:30px;font-size:20px;line-height:2;}   
                   
                   </style>
                </head >    
                <body>
                <div style='font-size:90px;padding-left:30px;'>^_^</div>
                <p class='success'>{$Info}</p><br>
                <a id='href' href='{$url}'>如果你的浏览器没有自动跳转，请点击这里...</a>
                  <br /><span>等待时间：</span> <b id='wait'>{$delay}</b>
                  <script type='text/javascript'>
                        window.onload=delayTime;
                        function delayTime(){
                            var wait = document.getElementById('wait'),href = document.getElementById('href').href;
                            var interval = setInterval(function(){
                                    var time = --wait.innerHTML;
                                    if(time <= 0) {
                                        location.href = href;
                                        clearInterval(interval);
                                    };
                                }, 1000);
                            }
                        </script>
                </body>  
            </html>";
    }
     // 执行失败函数error($Info='失败',$url="",$delay=3)
    // 参数说明：
    // @param $url string :执行失败跳转地址.默认跳转到其上一级页面
    // @param $info string:失败显示的信息，默认为失败
    // @param $delay int  :界面停留时间，默认为3s
    function error($Info='失败',$url="",$delay=3){
         if (empty($url)) {
            $url=$_SERVER['HTTP_REFERER'];//如果没有写跳转页面，则默认跳转到上一级页面.
          }
         echo "
             <html>
                <head>    
                   <meta http-equiv ='refresh' content ={$delay};url='{$url}'/>
                   <style>
                   .success{text-align: left;margin-top: 30px;font-size:60px;background:url(imgs/smile.jpg) no-repeat;margin-left:30px;}
                   #href,#wait,span{margin-left:30px;font-size:20px;line-height:2;}   
                   
                   </style>
                </head >    
                <body>
                <div style='font-size:90px;padding-left:30px;'>>﹏<</div>
                <p class='success'>{$Info}</p><br>
                <a id='href' href='{$url}'>如果你的浏览器没有自动跳转，请点击这里...</a>
                  <br /><span>等待时间：</span> <b id='wait'>{$delay}</b>
                  <script type='text/javascript'>
                        window.onload=delayTime;
                        function delayTime(){
                            var wait = document.getElementById('wait'),href = document.getElementById('href').href;
                            var interval = setInterval(function(){
                                    var time = --wait.innerHTML;
                                    if(time <= 0) {
                                        location.href = href;
                                        clearInterval(interval);
                                    };
                                }, 1000);
                            }
                        </script>
                </body>  
            </html>";
    }



    function panduan()
    {
      if (!isset($_SESSION["username"])) {
        error("想翻墙？请登录！","../login.html");
      }
    }





 ?>