<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<body>
<form method="POST" action="view.php">
	<div class="title">
		<h1>Sitigram</h1>
	</div>
	<button class="button1"><b>Log in with Facebook</b></button>
	<h3>- Or -</h3> 
	<div class="form-group">
		<input type="email" name="email" id="email" placeholder="Mobile Number or Email" required>
	</div>
	<div class="form-group">
		<input type="text" name="name" id="name" placeholder="Full Name" required>
	</div>
	<div class="form-group">
		<input type="text" name="username" id="username" placeholder="Username" required>
	</div>
	<div class="form-group">
		<input type="password" name="passwd" id="passwd" placeholder="Password" required>
	</div>
	<button class="button" id="button"><b>Sign Up</b></button>
	<p>By signing up, you agree to our<br><b>Terms</b> & <b>Privacy Policy</b></p>
</form>
</body>
</html>