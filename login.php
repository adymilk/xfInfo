<!DOCTYPE html>
<head>
	<title>小枫Info-登录</title>
	<?php include './public/head.php'; ?>
</head>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			
		
<body class="templatemo-bg-gray">
	<div class="container">
		<div class="col-sm-6 col-sm-offset-2 col-xs-12">
			<h1 class="margin-bottom-15" style="text-align:center">小枫Info</h1>
			<form class="form-horizontal templatemo-container templatemo-login-form-1 margin-bottom-30" role="form" action="./Action/do_login.php" method="post">				
		        <div class="form-group">
		          <div class="col-xs-12">		            
		            <div class="control-wrapper">
		            	<label for="username" class="control-label fa-label"><i class="fa fa-user fa-medium"></i></label>
		            	<input type="text" class="form-control" name="username" id="username" placeholder="用户名">
		            </div>		            	            
		          </div>              
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
		          	<div class="control-wrapper">
		            	<label for="password" class="control-label fa-label"><i class="fa fa-lock fa-medium"></i></label>
		            	<input type="password" class="form-control" name="userpass" id="password" placeholder="密码">
		            </div>
		          </div>
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
	             	<div class="checkbox control-wrapper">
	                	<label>
	                  		<input type="checkbox"> 记住我
                		</label>
                		<label style="float:right"><a href="forgot-password.php" class="text-right pull-right">忘记密码?</a></label>
                		<div class="clear"></div>
	              	</div>
		          </div>
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
		          	<div class="control-wrapper">
		          		<input type="submit" value="登录" class="btn btn-info" style="width:100%" onclick="fromCheck()">
		          		
		          	</div>
		          </div>
		        </div>
		        <hr>
		        <div class="text-center">
		      	<a href="register.php" class="templatemo-create-new">新用户注册 <i class="fa fa-arrow-circle-o-right"></i></a>	
		      </div>
		      </form>
		</div>
	</div>
	</div>
	</div>
</div>
	<!-- Modal -->
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>