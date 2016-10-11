<!DOCTYPE html>
<html>
<head>
    <title>web前端</title>
    <?php include './public/head.php'; ?>
    <link rel="stylesheet" type="text/css" href="./style/blog.css">
    
</head>
<body>
<!-- 启动SESSION记录登录的用户名 -->
                 
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
                    <li ><a href="./download.php">下载</a></li>
                    <li class="active"><a href="./blog.php">博客</a></li>
                    
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
    <!-- 左侧内容 开始 -->
        <div class="col-sm-9 col-xs-12">
            <div class="row"><img src="./assets/images/my-homepage.jpg" style="width:100%"></div>
            <div class="row">
                  <ul class="blog-timeLine">
                    <a href="#"><li class="active">时间线<span class="_513x"></span></li></a>
                    <a href="#"><li>关于</li></a>
                    <a href="#"><li >朋友</li></a>
                    <a href="./05-2/index.php"><li>照片</li></a>
                   <a href="./05-1/index.php"><li>更多<i class="_bxy img down-menu"></i></li></a>
                   <div class="clear"></div>
                    </ul>             
            </div>
            <br>
            <div class="row">
                <div class="col-sm-5 col-xs-12 blog-margin hidden-xs" >
                    <div class="row">
                    <div class="col-sm-12">
                            <div class="border">
                                <i class="info-img"></i>
                                <p class="title">交友信息</p>
                                <p>Hey, The world is so big. It's great honor for me to meet you here. Let's enjoy the colorful world.哈哈，这是我的facebook的个性签名。有机会认识大家，非常荣幸！</p>
                                <a href="#">+ 添加信息</a>
                                <span><a href="#" style="float:right">编辑</a></span>
                            </div>
                    </div>
                    </div>
                    <br>
                    <!-- 相册 开始 -->
                    <div class="row">
                    <div class="col-sm-12">
                            <div class="border">
                                <i class="info-img picture"></i>
                                <p class="title">相册</p>
                                <div class="row">
                                  <div class="col-xs-6 col-md-4">
                                    <a href="#" class="thumbnail">
                                      <img src="./assets/images/sublime.png" alt="...">
                                    </a>
                                  </div>
                                  <div class="col-xs-6 col-md-4">
                                    <a href="#" class="thumbnail">
                                      <img src="./assets/images/sublime.png" alt="...">
                                    </a>
                                  </div>
                                  <div class="col-xs-6 col-md-4">
                                    <a href="#" class="thumbnail">
                                      <img src="./assets/images/sublime.png" alt="...">
                                    </a>
                                  </div>
                                  <div class="col-xs-6 col-md-4">
                                    <a href="#" class="thumbnail">
                                      <img src="./assets/images/sublime.png" alt="...">
                                    </a>
                                  </div>
                                  <div class="col-xs-6 col-md-4">
                                    <a href="#" class="thumbnail">
                                      <img src="./assets/images/sublime.png" alt="...">
                                    </a>
                                  </div>
                                  <div class="col-xs-6 col-md-4">
                                    <a href="#" class="thumbnail">
                                      <img src="./assets/images/sublime.png" alt="...">
                                    </a>
                                  </div>
                                </div>
                            </div>
                    </div>
                    </div>
                    <!-- 相册 结束 -->
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="border">
                            <div class="list-group">
                          <a href="#" class="list-group-item disabled">
                            Cras justo odio
                          </a>
                          <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                          <a href="#" class="list-group-item">Morbi leo risus</a>
                          <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                          <a href="#" class="list-group-item">Vestibulum at eros</a>
                          <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                          <a href="#" class="list-group-item">Morbi leo risus</a>
                          <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                          <a href="#" class="list-group-item">Vestibulum at eros</a>
                          <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                          <a href="#" class="list-group-item">Morbi leo risus</a>
                          <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                          
</div>
                            </div>
                        </div>
                    </div>
                </div>
                 

                <div class="col-sm-7 blog-margin">
                    <div class="border blog-post">
                        <img src="./assets/images/head-icon.jpg"><span class="user-name">小枫</span> <span class="gexing"><a href="#">代码就是情人</a></span>
                        <p class="date">19:15 &nbsp 2016/06/25</p>
                        <p class="post-content">小枫Info官方网站即将上线啦，激动万分的时刻 <span><img src="./assets/images/smile.gif" class="emoji"></span></p>
                        <div class="post-content-img"><img src="./assets/images/code.png">
                        <br></div>
                        <hr>
                            <ul class="comment">
                                <li><a href="#"><span><img src="./assets/images/zan.png" style="width:31px; height:27px; "></span>点赞</a></li>
                                <li><a href="#"><span><img src="./assets/images/comment.png" style="width:31px; height:24px; "></span>评论</a></li>
                                <li ><a href="#"><span><img src="./assets/images/share.png" style="width:29px; height:28px; "></span>分享</a></li>
                                <div class="clear"></div>
                            </ul>
                    </div>
                    <div class="border blog-post">
                        <img src="./assets/images/head-icon.jpg"><span class="user-name">小枫</span> <span class="gexing"><a href="#">代码就是情人</a></span>
                        <p class="date">19:15 &nbsp 2016/06/25</p>
                        <p class="post-content">小枫Info官方网站即将上线啦，激动万分的时刻 <span><img src="./assets/images/smile.gif" class="emoji"></span></p>
                        <div class="post-content-img"><img src="./assets/images/code.png">
                        </div>
                        <hr>
                            <ul class="comment">
                                <li><a href="#"><span><img src="./assets/images/zan.png" style="width:31px; height:27px; "></span>点赞</a></li>
                                <li><a href="#"><span><img src="./assets/images/comment.png" style="width:31px; height:24px; "></span>评论</a></li>
                                <li ><a href="#"><span><img src="./assets/images/share.png" style="width:29px; height:28px; "></span>分享</a></li>
                                <div class="clear"></div>
                            </ul>
                    </div>
                    
                </div>

            </div>
        </div>

        <!-- 左侧内容 结束 -->
        <!-- 右侧内容 开始 -->
        <div class="col-sm-3 col-xs-12">
        <div class="row">
        <div class="col-sm-12 col-xs-12">
            <!-- 右侧文章 开始 -->
            <br>
              <div class="list-group">
          <a href="#" class="list-group-item active">
            推荐帖子
          </a>
          <a href="#" class="list-group-item"><span class="badge">15</span>【完美图标】MIUI8完美图标资源分享——第12.5波 暂停发布</a>
          <a href="#" class="list-group-item"><span class="badge">8</span> 【转载】这款小米手环2卖到有钱都买不到,为什么会如此...</a>
          <a href="#" class="list-group-item"><span class="badge">4</span>
          【转载】 【快乐六月第三期米五精品汇】</a>
          <a href="#" class="list-group-item"><span class="badge">1</span>
          【转载】MIUI 8开发版终于来了，这5个特色功能不用会后悔！</a>
          <a href="#" class="list-group-item"><span class="badge">15</span>【完美图标】MIUI8完美图标资源分享——第12.5波 暂停发布</a>
          <a href="#" class="list-group-item"><span class="badge">8</span> 【转载】这款小米手环2卖到有钱都买不到,为什么会如此...</a>
          <a href="#" class="list-group-item"><span class="badge">4</span> 【转载】 【快乐六月第三期米五精品汇】</a>
          <a href="#" class="list-group-item"><span class="badge">1</span>【转载】MIUI 8开发版终于来了，这5个特色功能不用会后悔！</a>

        </div>
            </div>
            </div>
        <!-- 右侧文章 结束 -->
        <div class="row">
            <div class="col-sm-12 col-xs-12">
            <div class="list-group">
          <a href="#" class="list-group-item active">
            新特性体验
          </a>
          <a href="#" class="list-group-item"><span class="badge">15</span>【完美图标】MIUI8完美图标资源分享——第12.5波 暂停发布</a>
          <a href="#" class="list-group-item"><span class="badge">8</span> 【转载】这款小米手环2卖到有钱都买不到,为什么会如此...</a>
          <a href="#" class="list-group-item"><span class="badge">4</span>
          【转载】 【快乐六月第三期米五精品汇】</a>
          <a href="#" class="list-group-item"><span class="badge">1</span>
          【转载】MIUI 8开发版终于来了，这5个特色功能不用会后悔！</a>
          <a href="#" class="list-group-item"><span class="badge">15</span>【完美图标】MIUI8完美图标资源分享——第12.5波 暂停发布</a>
          <a href="#" class="list-group-item"><span class="badge">8</span> 【转载】这款小米手环2卖到有钱都买不到,为什么会如此...</a>
          <a href="#" class="list-group-item"><span class="badge">4</span> 【转载】 【快乐六月第三期米五精品汇】</a>
          <a href="#" class="list-group-item"><span class="badge">1</span>【转载】MIUI 8开发版终于来了，这5个特色功能不用会后悔！</a>
          <a href="#" class="list-group-item"><span class="badge">1</span>
          【转载】MIUI 8开发版终于来了，这5个特色功能不用会后悔！</a>
          <a href="#" class="list-group-item"><span class="badge">15</span>【完美图标】MIUI8完美图标资源分享——第12.5波 暂停发布</a>
          <a href="#" class="list-group-item"><span class="badge">8</span> 【转载】这款小米手环2卖到有钱都买不到,为什么会如此...</a>
          <a href="#" class="list-group-item"><span class="badge">4</span> 【转载】 【快乐六月第三期米五精品汇】</a>
          
        </div>
            </div>

        </div>
        </div>
         <!-- 右侧内容 结束 -->
    </div>
   
    </div>
    <?php include './public/footer.php'; ?>
   
</body>
</html>