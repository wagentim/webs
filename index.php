<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="">
		<meta name="author" content="wagentim">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link type="text/css" href="style/main.css" rel="stylesheet">
		<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/smoothness/jquery-ui.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
		<script src="js/mjs.js"></script>
		<title>Home Apps</title>
	</head>

	<body>
		<div class="fixed_headerbar_background">
			<p class="fixed_headerbar_content"></p>
			<script type="text/javascript">getTime()</script>
		</div>
		<!-- Login Block -->
		<div class="login_block">
			<!-- Login Title -->
			<div class="login_title">
				<p class="title">
					Home Apps: Sign-up
					<br>
					<span class="sub_text">Sign-up for more functions</span>
					<hr>
				</p>
			</div>
			<br>
			<!-- Longin Form -->
			<div class="login_form_block">
			
			<form id="login" action="user.php">
				<div id="user_name">
					User Name: <input name="user_name" type="text" style="width:200px" align="right" />
				</div>
				<br>
				<div id="pwd">
					Password: <input name="pwd" type="text" style="width:200px;margin-left: 11px" align="right" />
				</div>
				<br />
				<p>
					<input type="image" src="img/login.jpg" alt="Submit" style="width: 80px; height: auto" />
					<a class="forget_pwd" href="forgetpwd.php">Forget Password?</span>
				</p>
			</form>
			</div>
		</div>
	</body>
</html>
