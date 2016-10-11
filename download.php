
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
<title>小枫Info-app</title>
        <?php include './public/head.php'; ?>
        <link rel="stylesheet" type="text/css" href="./style/android.css">
</head>
<body>
<!-- 百度js自动推送代码 开始 -->
<script>

(function(){

    var bp = document.createElement('script');

    bp.src = '//push.zhanzhang.baidu.com/push.js';

    var s = document.getElementsByTagName("script")[0];

    s.parentNode.insertBefore(bp, s);
})();
</script>
<!-- 百度js自动推送代码 结束 -->

        <div class="navbar-wrapper">
          <div class="container">

            <nav class="navbar navbar-inverse navbar-fixed-top">
              <div class="container">
                <div class="navbar-header">
                <a class="navbar-brand" href="#">
                  <img alt="Brand" src="./assets/images/logo.png" style="margin-left:10px; ">
                </a>
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="./index.php">小枫Info</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav index">
                    <li ><a href="./index.php">网站主页</a></li>
                    <li><a href="./shequ.php">社区</a></li>
                    <li class="active"><a href="./download.php">下载</a></li>
                    <li><a href="./blog.php">博客</a></li>
                    
                        <li class="login-and-reg" style="float:right"><a href="./register.php">注册</a></li> 
                        <li class="login-and-reg" style="float:right"><a href="./Action/do_login.php?action=logout">注销</a></li>
                        <li class="login-and-reg" style="float:right"><a href="./login.php">
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
 <br><br>
<div class="container">
    <div class="row">
    <br>
    <!-- 左侧下载 开始 -->
    <div class="col-sm-8">
        <div class="row">
        <div class="col-sm-12">
        <h4 style="text-align:left;">新品发布 <span><img src="./assets/images/new.gif"></span> <span> <a class="see-more" href="#">查看更多</a></span></h4>
        <div class="col-sm-3 col-xs-6  content">
        <div class="over-on-img">
        <img class="app" src="./assets/images/lantern.png">
        </div>
            <h4 class="app-detail">1. lantern</h4>
            <p class="app-detail">程序员推荐退好用的vpn</p>
            <a class="btn btn-outline-inverse btn-lg" href="./assets/files/lantern.apk" target="_blank">下载</a>
            <a class="btn btn-outline-inverse btn-lg detail" href="#">详情</a>
        </div>
        
        <div class="col-sm-3 col-xs-6 content">
        <img class="app" src="./assets/images/xfInfo.png">
            <h4 class="app-detail">2. 小枫Info</h4>
            <p class="app-detail">充满魔力的安卓应用</p>
            <a class="btn btn-outline-inverse btn-lg" href="./assets/files/xfInfo.apk" target="_blank">下载</a>
            <a class="btn btn-outline-inverse btn-lg detail" href="#">详情</a>
        </div>
        <div class="col-sm-3 col-xs-6 content">
            <img class="app" src="./assets/images/ctiny.png">
            <h4 class="app-detail">3. ctiny免流</h4>
            <p class="app-detail"> 蜡笔小新制作,精品值得账号：CTiny
密码：Lbxx</p>
            <a class="btn btn-outline-inverse btn-lg" href="./assets/files/ctiny.apk" target="_blank">下载</a>
            <a class="btn btn-outline-inverse btn-lg detail" href="#">详情</a>
        </div>
        <div class="col-sm-3 col-xs-6 content">
            <img class="app" src="./assets/images/via.png">
            <h4 class="app-detail">4. via浏览器</h4>
            <p class="app-detail">史上最强大的良心浏览器,</p>
            <a class="btn btn-outline-inverse btn-lg" href="./assets/files/via.apk" target="_blank">下载</a>
            <a class="btn btn-outline-inverse btn-lg detail" href="#">详情</a>
        </div>
        </div>
        </div>
        <br>
        <div class="row">
        <div class="col-sm-12">
        <h4 style="text-align:left;">系统安全 <span><img src="./assets/images/new.gif"></span> <span> <a class="see-more" href="#">查看更多</a></span></h4>
        <div class="col-sm-3 col-xs-6  content">
        <div class="over-on-img">
        <img class="app" src="./assets/images/lantern.png">
        </div>
            <h4 class="app-detail">1. lantern</h4>
            <p class="app-detail">程序员推荐退好用的vpn</p>
            <a class="btn btn-outline-inverse btn-lg" href="./assets/files/lantern.apk" target="_blank">下载</a>
            <a class="btn btn-outline-inverse btn-lg detail" href="#">详情</a>
        </div>
        
        <div class="col-sm-3 col-xs-6 content">
        <img class="app" src="./assets/images/xfInfo.png">
            <h4 class="app-detail">2. 小枫Info</h4>
            <p class="app-detail">充满魔力的安卓应用</p>
            <a class="btn btn-outline-inverse btn-lg" href="./assets/files/xfInfo.apk" target="_blank">下载</a>
            <a class="btn btn-outline-inverse btn-lg detail" href="#">详情</a>
        </div>
        <div class="col-sm-3 col-xs-6 content">
            <img class="app" src="./assets/images/ctiny.png">
            <h4 class="app-detail">3. ctiny免流</h4>
            <p class="app-detail"> 蜡笔小新制作,精品值得账号：CTiny
密码：Lbxx</p>
            <a class="btn btn-outline-inverse btn-lg" href="./assets/files/ctiny.apk" target="_blank">下载</a>
            <a class="btn btn-outline-inverse btn-lg detail" href="#">详情</a>
        </div>
        <div class="col-sm-3 col-xs-6 content">
            <img class="app" src="./assets/images/via.png">
            <h4 class="app-detail">4. via浏览器</h4>
            <p class="app-detail">史上最强大的良心浏览器,</p>
            <a class="btn btn-outline-inverse btn-lg" href="./assets/files/via.apk" target="_blank">下载</a>
            <a class="btn btn-outline-inverse btn-lg detail" href="#">详情</a>
        </div>
        </div>
        </div>
        <br>
        <div class="row">
        <div class="col-sm-12">
        <h4 style="text-align:left;">游戏 <span><img src="./assets/images/new.gif"></span> <span> <a class="see-more" href="#">查看更多</a></span></h4>
        <div class="col-sm-3 col-xs-6  content">
        <div class="over-on-img">
        <img class="app" src="./assets/images/lantern.png">
        </div>
            <h4 class="app-detail">1. lantern</h4>
            <p class="app-detail">程序员推荐退好用的vpn</p>
            <a class="btn btn-outline-inverse btn-lg" href="./assets/files/lantern.apk" target="_blank">下载</a>
            <a class="btn btn-outline-inverse btn-lg detail" href="#">详情</a>
        </div>
        
        <div class="col-sm-3 col-xs-6 content">
        <img class="app" src="./assets/images/xfInfo.png">
            <h4 class="app-detail">2. 小枫Info</h4>
            <p class="app-detail">充满魔力的安卓应用</p>
            <a class="btn btn-outline-inverse btn-lg" href="./assets/files/xfInfo.apk" target="_blank">下载</a>
            <a class="btn btn-outline-inverse btn-lg detail" href="#">详情</a>
        </div>
        <div class="col-sm-3 col-xs-6 content">
            <img class="app" src="./assets/images/ctiny.png">
            <h4 class="app-detail">3. ctiny免流</h4>
            <p class="app-detail"> 蜡笔小新制作,精品值得账号：CTiny
密码：Lbxx</p>
            <a class="btn btn-outline-inverse btn-lg" href="./assets/files/ctiny.apk" target="_blank">下载</a>
            <a class="btn btn-outline-inverse btn-lg detail" href="#">详情</a>
        </div>
        <div class="col-sm-3 col-xs-6 content">
            <img class="app" src="./assets/images/via.png">
            <h4 class="app-detail">4. via浏览器</h4>
            <p class="app-detail">史上最强大的良心浏览器,</p>
            <a class="btn btn-outline-inverse btn-lg" href="./assets/files/via.apk" target="_blank">下载</a>
            <a class="btn btn-outline-inverse btn-lg detail" href="#">详情</a>
        </div>
        </div>
        </div>
        <br>
        <div class="row">
        <div class="col-sm-12">
        <h4 style="text-align:left;">个性化 <span><img src="./assets/images/new.gif"></span> <span> <a class="see-more" href="#">查看更多</a></span></h4>
        <div class="col-sm-3 col-xs-6  content">
        <div class="over-on-img">
        <img class="app" src="./assets/images/lantern.png">
        </div>
            <h4 class="app-detail">1. lantern</h4>
            <p class="app-detail">程序员推荐退好用的vpn</p>
            <a class="btn btn-outline-inverse btn-lg" href="./assets/files/lantern.apk" target="_blank">下载</a>
            <a class="btn btn-outline-inverse btn-lg detail" href="#">详情</a>
        </div>
        
        <div class="col-sm-3 col-xs-6 content">
        <img class="app" src="./assets/images/xfInfo.png">
            <h4 class="app-detail">2. 小枫Info</h4>
            <p class="app-detail">充满魔力的安卓应用</p>
            <a class="btn btn-outline-inverse btn-lg" href="./assets/files/xfInfo.apk" target="_blank">下载</a>
            <a class="btn btn-outline-inverse btn-lg detail" href="#">详情</a>
        </div>
        <div class="col-sm-3 col-xs-6 content">
            <img class="app" src="./assets/images/ctiny.png">
            <h4 class="app-detail">3. ctiny免流</h4>
            <p class="app-detail"> 蜡笔小新制作,精品值得账号：CTiny
密码：Lbxx</p>
            <a class="btn btn-outline-inverse btn-lg" href="./assets/files/ctiny.apk" target="_blank">下载</a>
            <a class="btn btn-outline-inverse btn-lg detail" href="#">详情</a>
        </div>
        <div class="col-sm-3 col-xs-6 content">
            <img class="app" src="./assets/images/via.png">
            <h4 class="app-detail">4. via浏览器</h4>
            <p class="app-detail">史上最强大的良心浏览器,</p>
            <a class="btn btn-outline-inverse btn-lg" href="./assets/files/via.apk" target="_blank">下载</a>
            <a class="btn btn-outline-inverse btn-lg detail" href="#">详情</a>
        </div>
        </div>
        </div>

            
        </div>
        
        
    
    <!-- 左侧下载 结束 -->
    <!-- 右侧推荐 开始 -->
        <div class="col-sm-4  ">
        <div class="list-group">
  <a href="#" class="list-group-item active" style="background-color:#DB4437">
  软件下载
  </a>
  <a href="#" class="list-group-item"><span class="badge">15</span>微信【即时通讯】</a>
  <a href="#" class="list-group-item"><span class="badge">8</span> QQ【社交分享】</a>
  <a href="#" class="list-group-item"><span class="badge">4</span>
  facebook</a>
  <a href="#" class="list-group-item"><span class="badge">1</span>
  google now</a>
  <a href="#" class="list-group-item"><span class="badge">15</span>UC浏览器</a>
  <a href="#" class="list-group-item"><span class="badge">8</span> 小枫Info官方app</a>
  <a href="#" class="list-group-item"><span class="badge">4</span> 免流软件【神器】</a>
  <a href="#" class="list-group-item"><span class="badge">1</span>VIA浏览器【小巧精悍】</a>
  </div>
  <div class="list-group">
  <a href="#" class="list-group-item active" style="background-color:#DB4437">
    游戏排行
  </a>
  <a href="#" class="list-group-item"><span class="badge">15</span>微信【即时通讯】</a>
  <a href="#" class="list-group-item"><span class="badge">8</span> QQ【社交分享】</a>
  <a href="#" class="list-group-item"><span class="badge">4</span>
  facebook</a>
  <a href="#" class="list-group-item"><span class="badge">1</span>
  google now</a>
  <a href="#" class="list-group-item"><span class="badge">15</span>UC浏览器</a>
  <a href="#" class="list-group-item"><span class="badge">8</span> 小枫Info官方app</a>
  <a href="#" class="list-group-item"><span class="badge">4</span> 免流软件【神器】</a>
  <a href="#" class="list-group-item"><span class="badge">1</span>VIA浏览器【小巧精悍】</a>
  </div>
        </div>
    <!-- 右侧推荐 结束 -->
    </div>
</div>
<?php 
include 'public/footer.php';
  ?>
</body>
</html>
 