<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran berhasil</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<form method="POST" action="view.php">
	<h1>Pendaftaran Success</h1>
	<table>
		<tr>
			<td>Email</td><td> :</td><td><?php echo $_POST["email"]; ?></td>
		</tr>
		<tr>
			<td>Full Name</td><td> :</td><td><?php echo $_POST["name"]; ?></td>
		</tr>
		<tr>
			<td>Username</td><td> :</td><td><?php echo $_POST["username"]; ?></td>
		</tr>
		<tr>
			<td>Password</td><td> :</td><td><?php echo $_POST["password"]; ?></td>
		</tr>
	</table>
</form>
</body>
</html>