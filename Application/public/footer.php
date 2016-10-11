        <!-- 返回顶部 开始 -->
        <div class="dock">
          <ul class="icons">
            <li class="up active" onclick="toTop()"><i style="color:#fff; text-align:center">顶部</i></li>
            <li id="close-dock" style="text-align:center; color:#fff">关闭</li>
          </ul>
        </div>
        <script type="text/javascript">
        function toTop(){
        window.scroll(0,0);
        }
        $(document).ready(function(){
          $("#close-dock").click(function(){
              $(".dock").hide();  
          });          
        });
        </script>
        <!-- 返回顶部 结束 -->
    <footer style=" width: 100%; background-color: #202020; color: #ffffff; padding-top: 10px">
              <div class="container">

                      <div class="row" >
                          <div class="col-xs-3" style="width: 33.33333333%;">
                              <h4 class="title">友情链接</h4>
                                <ul class="footer_ul">
                                  <li><a href="http://v3.bootcss.com/" target="_blank">Bootstrap官网</a></li>
                                  <li><a href="http://www.z-pw.cn/index.html" target="_blank">怪客学院</a></li>
                                  <li><a href="http://www.yangqq.com/" target="_blank">杨青博客</a></li>
                                  <li><a href="http://www.runoob.com/html/html5-intro.html">菜鸟教程</a></li>
                                </ul>
                              
                          </div>
                        <div class="col-xs-3" style="width: 33.33333333%;">
                            <h4 class="title">编辑器</h4>
                                <ul class="footer_ul">
                                  <li><a href="http://www.sublimetext.com" target="_blank">Sublime</a></li>
                                  <li><a href="http://www.android-studio.org/" target="_blank">android</a></li>
                                  <li><a href="http://www.dcloud.io/" target="_blank">hbuilder</a></li>
                                </ul>
                        </div>
                        <div class="col-xs-3" style="width: 33.33333333%;">
                            <h4 class="title">建议反馈</h4>
                            <ul class="footer_ul">
                                  <li><a href="#">小枫QQ：924114103</a></li>
                                  <li><a target="_blank" href="http://shang.qq.com/wpa/qunwpa?idkey=b133f5698cacd6cb9bffaa07599e6c9f101fb36f05cdb3577f767eb528a29243"><img border="0" src="http://pub.idqqimg.com/wpa/images/group.png" alt="软件用户交流群①群" title="软件用户交流群①群" target="_blank">点击一键加群</a></li>
                                </ul>
                        </div>
                      </div>
                  </div>
              </div>
              <br><br>
              <div class="col-sm-1 col-xs-2 thanks" style="width:100%;padding-left:0px;padding-right:0px; margin-left:0px;"><ul style="padding-left:0px;">
                <li><b>致谢：</b></li>
                <li>Google play</li>
                <li>Facebook</li>
                <li>米柚</li>
                <li>微博</li>
                <li>知乎</li>
                <li>Github</li>
                <li>InfoQ</li>
              </ul></div>
              <div class="copyright" style="background-color: #000000; color: #8c8c8c;">
              <p>&copy; Copyright © 小枫Info | 京ICP备11100833312151号
        </a></p>
            </div>
            </footer>
          <!-- Bootstrap core JavaScript
          ================================================== -->
          <!-- Placed at the end of the document so the pages load faster -->
          <script type="text/javascript" src="../../style/bootstrap/js/jquery-1.11.1.min.js"></script>
        <script src="../../style/bootstrap/js/bootstrap.min.js"></script>
        <!-- 初始化弹出框组件 开始 -->
<script type="text/javascript">
  $(function () {
  $('[data-toggle="popover"]').popover()
})
</script>
<!-- 初始化弹出框组件 结束 -->