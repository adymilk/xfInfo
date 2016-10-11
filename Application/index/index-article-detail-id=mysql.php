<!DOCTYPE html>
<html>
<head>
    <title>小枫Info-用命令行玩mysql数据库·超酷</title>
<?php include '../public/head.php'; ?>
<link rel="stylesheet" type="text/css" href="../comm.css">
</head>
<body>
    <?php include '../public/nav.php'; ?>
  
    <!-- 文章导航 -->
      <div class="container" style="margin-top:30px;">
    <div class="row">
      <div class="col-sm-9 hidden-md hidden-sm hidden-ld" style="padding-left:0px; padding-right:0px;">
        <ul class="article-nav no-margin no-padding" style="padding-left:0px; padding-right:0px">
      <li><a href="../../index.php">首页</a></li>
      <li><a href="../../#.php">话题</a></a></li>
      <li><a href="../../#.php">发现</a></li>
      <li><a href="../../#.php">消息</a></li>
      <li><a href="../../#.php">我</a></li>
      <div class="clear"></div>
  </ul>
      </div>
    </div>  
<div class="row">
    <div class="col-sm-9 col-md-9 col-xs-12 bg">
    <div class="detail-title">
        <h3 class="center">用命令行玩mysql数据库</h3>
        <p class="center">发布时间:2016年07/08 编辑:小枫</p>
    </div>
    <div class="detail-content">
        <h3>创建数据库</h3>
        <div class="code">Create databases if not exists `yourDatabaseName`;</div>
        <h4>选择数据库</h4>
        <div class="code">Use yourDatabaseName;</div>
        <h4>选择向数据库导入SQL文件</h4>
        <div class="code">source D:/YourDatabase.sql;</div>
        <h4>或者新建表</h4>
        <div class="code">/*创建表*/
--unsigned->无字符
--auto_increment->自增
--engine->数据库引擎myisam
create table if not exists `user`(
        `id`        int(10)         unsigned    not null primary key    auto_increment,
        `uName`     varchar(20)     not null,
        `uPass`     varchar(20)     not null,
        `regTime`   varchar(30)     default null
    )engine=myisam default charset=utf8;
</div>
    </div>
    <li class="uvp">浏览量:<span>1024</span>次</li>
    </div>
    <!-- 左侧文章内容 结束 -->
    <!-- 右侧文章 开始 -->
            <div class="col-md-3 col-sm-3 hidden-xs no-padding">
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
  <nav>
  <ul class="pager">
    <li><a href="#">向前</a></li>
    <li><a href="#">下一页</a></li>
  </ul>
</nav>
  </div>
        </div>
        <!-- 右侧推荐列表 结束 -->
        <!-- 右侧文章 开始 -->
            
            </div>
            </div>
</div>

</div>
    <?php include '../public/footer.php'; ?>

</body>
</html>