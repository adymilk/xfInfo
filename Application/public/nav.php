百度js自动推送代码 开始 -->
<script>

(function(){

    var bp = document.createElement('script');

    bp.src = '//push.zhanzhang.baidu.com/push.js';

    var s = document.getElementsByTagName("script")[0];

    s.parentNode.insertBefore(bp, s);
})();
</script>
<!-- 百度js自动推送代码 结束 -->
<!-- 导航菜单 开始 -->
<div class="clear"></div>
        <div class="navbar-wrapper">
          <div class="container">
            <nav class="navbar navbar-inverse navbar-fixed-top">
              <div class="container">
                <div class="navbar-header">
                <a class="navbar-brand" href="#">
                  <img alt="Brand" src="../../assets/images/logo.png">
                </a>
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="../../index.php">小枫Info</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="../../index.php">网站主页</a></li>
                    <li > <a href="../../shequ.php">社区</a></li>
                    <li ><a href="../../download.php">下载</a></li>
                    <li><a href="../../blog.php">博客</a></li>
                        <li class="login-and-reg" style="float:right"><a href="../../Action/do_login.php?action=logout">注销</a></li> 
                        <li class="login-and-reg" style="float:right"><a href="../../login.php">
                        <?php 
                        session_start();
                        if (!isset($_SESSION['username'])) {
                          $_SESSION['username']="请登录";
                        }  
                             echo $_SESSION['username'];
                         ?></a>
                        </li>  

                        
                    </ul>
                </div>
              </div>
            </nav>

          </div>

        </div>
        
        
        
 
    <!-- 导航菜单 结束