<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  
  
  
      <link rel="stylesheet" href="<?php echo site_url('resources/css/style_login.css')?>">

  
</head>

<body>

  <body>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Login</h1>
			</div>

			<div class="login-form">
				<form action="<?=site_url()?>Admin/cek_login" method="post">
					<div class="control-group">
					<input type="text" name="username" class="login-field" value="" placeholder="username" id="login-name">
					<label class="login-field-icon fui-user" for="login-name"></label>
					</div>

					<div class="control-group">
					<input type="password" name="password" class="login-field" value="" placeholder="password" id="login-pass">
					<label class="login-field-icon fui-lock" for="login-pass"></label>
					</div>

					<button type="submit" class="btn btn-primary btn-large btn-block">Login</button>
					<a class="login-link" href="#">Lost your password?</a>
				</form>
			</div>
		</div>
	</div>
</body>
  
  

</body>

</html>
