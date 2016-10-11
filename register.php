<!DOCTYPE html>
<head>
	<title>小枫Info-用户</title>
	<?php include './public/head.php'; ?>
</head>
<body class="templatemo-bg-gray">
<div class="container">
	<div class="row">
		<div class="col-sm-6 col-xs-12 col-sm-offset-2">
			
	
	
	<div class="col-md-12">
	<h1 class="margin-bottom-15" style="text-align:center">小枫Info</h1>
	</div>
		<div class="col-md-12">			
			<form class="form-horizontal templatemo-create-account templatemo-container" role="form" action="./Action/do_register.php" method="post">
				<div class="form-inner">
					
			        <div class="form-group">
			          <div class="col-md-12">		          	
			            <label for="username" class="control-label">邮箱</label>
			            <input type="email" class="form-control" id="username" placeholder="" name="uname">		            		            		            
			          </div>              
			        </div>			
			        <div class="form-group">
			          <div class="col-md-12">		          	
			            <label for="username" class="control-label">登录名</label>
			            <input type="text" class="form-control" id="username" placeholder="" name="uname">		            		            		            
			          </div>
			                  
			        </div>
			        <div class="form-group">
			          <div class="col-md-12">
			            <label for="password" class="control-label">密码</label>
			            <input type="password" class="form-control" id="password" placeholder="" name="upass">
			          </div>
			          
			        </div>
			        <div class="form-group">
			          <div class="col-md-12">		          	
			            <label for="username" class="control-label">确认密码</label>
			            <input type="text" class="form-control" id="username" placeholder="" name="upass-again">		            		            		            
			          </div>
			                  
			        </div>
			        <div class="form-group">
			          <div class="col-md-12">
			            <label><input type="checkbox">我同意 <a href="javascript:;" data-toggle="modal" data-target="#templatemo_modal">用户协议</a> </label><span style="padding-right:10px; float:right"><a href="./login.php" >我有账号</a></span>
			            <div class="clear"></div>
			          </div>
			        </div>
			        <div class="form-group">
			          <div class="col-md-12">
			            <input type="submit" value="马上注册" class="btn btn-info" style="width:100%;">
			            
			          </div>
			        </div>	
				</div>				    	
		      </form>		      
	</div>

		</div>
	</div>
</div>
	<!-- Modal -->
	<script type="text/javascript" src="./style/bootstrap/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="./style/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>