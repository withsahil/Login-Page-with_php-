<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Cookie|Hind" rel="stylesheet">
</head>
<body>
    <div class="logo" style="font-family:'Hind', cursive;">
		<h2>ProSols India</h2>
	</div>
	<div class="logob">
		<h2>Your problems, our solution</h2>
	</div>
	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
		<br>
		<p>ProSols India brings you(maybe the new buisness or an entrepreneur) the affordable and reliable way of getting your websites, designs, blogs or any kind of desk content made for you, just join us and feel the ease because we gonna solve your designing, writing , making and all such problems. </p>
	</form>


</body>
</html>