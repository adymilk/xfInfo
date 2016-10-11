<!DOCTYPE html>
<html>
<head>
    <title>小枫Info-用命令行编译APK</title>
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
        <h3 class="center">用命令行编译APK</h3>
        <p class="center">发布时间:2016年02/15 编辑:小枫</p>
    </div>
    
    <div class="detail-content">
        <div class="code">
          echo off
rem =========基本参数配置============
rem jdk的路径
set JAVA_HOME=D:/Program Files/Java/jdk1.6.0_24
rem jdk的版本
set JDK_Version=1.6
rem sdk的路径
set AndroidHome=D:/Android/android-sdk-windows
rem 编译的android版本路径
set AndroidVersion=/platforms/android-8
rem 编译的android项目路径
set AndroidProject=D:/yourProject
rem 编译生成的未签名apk文件
set unsign_apk=yourProject.apk
rem 编译生成的已签名apk文件
set sign_apk=yourProject-sign.apk
rem 签名用的key
set apk_key=keyname
set apk_keypass=keypass
set apk_keystore=D:/yourProject/key.keystore

for %%x in ("%AndroidProject%") do set AndroidProject=%%~sx
for %%x in ("%JAVA_HOME%") do set JAVA_HOME=%%~sx
for %%x in ("%AndroidHome%") do set AndroidHome=%%~sx
rem jdk工具包
set EXE_JAVA=%JAVA_HOME%/bin/java
set JAVAC=%JAVA_HOME%/bin/javac
set JAR=%JAVA_HOME%/bin/jar
set KeyTool=%JAVA_HOME%/bin/keytool
set Jarsigner=%JAVA_HOME%/bin/jarsigner
rem sdk工具包
set AndroidAAPT=%AndroidHome%%AndroidVersion%/tools/aapt.exe
set AndroidDx=%AndroidHome%%AndroidVersion%/tools/dx.bat
set AndroidApkBuilder=%AndroidHome%/tools/apkbuilder.bat
set AndroidJar=%AndroidHome%%AndroidVersion%/android.jar
rem android项目引用的扩展jar包
set ExternerJar=%AndroidProject%/lib/commons-codec.jar;%AndroidProject%/lib/commons-httpclient-3.1.jar;
set ReferJar=%AndroidProject%/lib/commons-codec.jar %AndroidProject%/lib/commons-httpclient-3.1.jar
rem android项目基本目录及配置文件
set AndroidProjectRes=%AndroidProject%/res
set AndroidProjectGen=%AndroidProject%/gen
set AndroidProjectBin=%AndroidProject%/bin
set AndroidProjectAsset=%AndroidProject%/assets
set AndroidProjectAndroidMainfest=%AndroidProject%/AndroidManifest.xml
set AndroidProjectSrc=%AndroidProject%/src/weibo/*.java
set AndroidProjectSrc=%AndroidProjectSrc% %AndroidProject%/src/weibo/http/*.java
set AndroidProjectSrc=%AndroidProjectSrc% %AndroidProject%/src/weibo/util/*.java
set AndroidProjectSrc=%AndroidProjectSrc% %AndroidProject%/gen/yourProjectPackageName/*.java
rem 编译输出文件
set AndroidProjectClassDex=%AndroidProject%/bin/classes.dex
set AndroidProjectResources=%AndroidProject%/bin/resources.ap_
set AndroidProjectApk="%AndroidProject%/bin/%unsign_apk%"
set AndroidProjectSignApk="%AndroidProject%/bin/%sign_apk%"

echo 生成R.java
%AndroidAAPT% package -f -m -J %AndroidProjectGen% -S %AndroidProjectRes% -I %AndroidJar% -M %AndroidProjectAndroidMainfest%

echo 生成class
%JAVAC% -encoding UTF-8 -target %JDK_Version% -bootclasspath %AndroidJar% -classpath %ExternerJar% -d %AndroidProjectBin% %AndroidProjectSrc%

echo 生成dex
cd %AndroidProjectBin%
rem 把bin目录下*.class文件打成jar包
%JAR% cvf %AndroidProjectBin%/yourProject.jar *.*
cd %AndroidProject%
rem 生成dex  这里需要注意，因为调用的是bat的脚本，因此必须用Call
call %AndroidDx% --dex --output=%AndroidProjectClassDex% %AndroidProjectBin%/yourProject.jar %ReferJar%

echo 打包资源文件
%AndroidAAPT% package -f -M %AndroidProjectAndroidMainfest% -S %AndroidProjectRes% -A %AndroidProjectAsset% -I %AndroidJar% -F %AndroidProjectResources%

echo 生成未签名的apk文件
call %AndroidApkBuilder% %AndroidProjectApk% -v -u -z %AndroidProjectResources% -f %AndroidProjectClassDex% -rf %AndroidProject%/src

echo 生成数字签名key.keystore
%KeyTool% -genkey -v -keystore %apk_keystore% -storepass %apk_keypass% -keypass %apk_keypass% -alias myKey -dname CN=Liux,OU=makingware.com,O=makingware,L=sz,ST=gd,C=cn -keyalg RSA -validity 10000 

echo 进行数字签名
%Jarsigner% -verbose -keystore %apk_keystore% -keypass %apk_keypass% -storepass %apk_keypass% -signedjar %AndroidProjectSignApk% %AndroidProjectApk% myKey

echo 签名成功
pause
        </div>
<img src="../../assets/images/code.png" style="width:100%">
    </div>
    </div>
    <!-- 左侧文章内容 结束 -->
    <!-- 右侧文章 开始 -->
            <div class="col-md-3 col-sm-3 hidden-xs">
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