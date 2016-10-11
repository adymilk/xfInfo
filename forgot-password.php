<!DOCTYPE html>
<head>
	<title>密码重置</title>
	<?php include './public/head.php'; ?>
</head>
<body class="templatemo-bg-gray">
	<div class="container">
		<div class="col-md-12">
			<h1 class="margin-bottom-15">密码重置</h1>
			<form class="form-horizontal templatemo-forgot-password-form templatemo-container" role="form" action="#" method="post">	
				<div class="form-group">
		          <div class="col-md-12">
		          	请输入您注册时的电子邮箱，稍后我们会给你发送密码重置邮件。
		          </div>
		        </div>		
		        <div class="form-group">
		          <div class="col-md-12">
		            <input type="text" class="form-control" id="email" placeholder="您的邮箱地址">	            
		          </div>              
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
		            <input type="submit" value="提交" class="btn btn-danger">
                    <br><br>
                    <a href="login.php">登录</a> |
                    <a href="index.php">首页</a>
		          </div>
		        </div>
		      </form>
		</div>
	</div>
</body>
</html>