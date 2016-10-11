  <!DOCTYPE html>
  <html>
  <head>
      <title>小枫Info-温馨解决sublime各种问题</title>
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
          <h3 class="center">解决sublime各种问题</h3>
          <p class="center">发布时间:2016年02/15 编辑:小枫</p>
      </div>
      <div class="detail-content padding-5">
          <p>sublime一直是程序员们比较喜爱的编辑器之一,因它轻便、插件化强大而爱不释手。在sublime上面写代码是一种享受，有一丝丝自豪感！<img src="../../assets/images/laught.gif"></p>
          <h3>问题：Sublime中文文件名乱码</h3>
          <div class="code">
          <p><b>原因：</b>刚装上Sublime Text 3文件名显示成了方框，是因为电脑DPI设置成了125%，结果Sublime Text 3却不兼容了</p>
          <h4>解决方法：覆盖操作系统设置的DPI，具体操作如下：</h4>
          中文版操作是：<br>
              1、点“首选项”菜单<br>
              2、选择“配置－用户”项<br>
              3、在最后一行加上“”dpi_scale”:1.0”一句，别忘了把上一行末尾加一个“，”，不然会提示语法错误。<br>
              4、保存配置文件，重启Sublime Text 3就可以了。<br>
              </div>
              <div class="code">
              英文版操作是：
              <br>
              1、点“Preference”,<br>
              2、选择“Settings-User”，<br>
              3、最后加上一行”dpi_scale”: <br>1.0，别忘了把上一行末尾加一个“，”，不然会提示语法错误。</p>
              <h4>如下图</h4></div>
              <img src="../../assets/images/article-detail-img-sublime1.png" class="templete-detail-img">
              <h4>效果展示</h4>

          <img src="../../assets/images/article-detail-img-subime1.gif" class="templete-detail-img">
          <h4>效果展示</h4>
          <img src="../../assets/images/article-detail-img-subime2.gif" class="templete-detail-img">
          <h4>效果展示</h4>
          <img src="../../assets/images/article-detail-img-subime3.gif" class="templete-detail-img">
          
      </div>
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
              <div class="col-md-3 col-sm-3 hidden-xs">
                <div class="list-group">
    <a href="#" class="list-group-item active">
      下载排行
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
    <ul class="pager">
      <li><a href="#">向前</a></li>
      <li><a href="#">下一页</a></li>
    </ul>
    </div>
          </div>
          <!-- 右侧推荐列表 结束 -->
              </div>   
              <div class="row">
                <div class="col-sm-12">
                  
                </div>
              </div>       
      

  </div>

  </div>
      <?php include '../public/footer.php'; ?>

  </body>
  </html>