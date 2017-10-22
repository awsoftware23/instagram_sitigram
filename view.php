<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran berhasil</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>

<?php

	$host = "localhost";
	$user = "root";
	$password = "";

	$email = $_POST['email'];
	$name = $_POST['name'];
	$username = $_POST['username'];
	$passwd = $_POST['passwd']

?>

<form method="POST" action="view.php">
	<h1>Pendaftaran Success</h1>
	<table>
		<tr>
			<td>Email</td><td> :</td><td><?php echo "$email"; ?></td>
		</tr>
		<tr>
			<td>Full Name</td><td> :</td><td><?php echo "$name"; ?></td>
		</tr>
		<tr>
			<td>Username</td><td> :</td><td><?php echo "$username"; ?></td>
		</tr>
		<tr>
			<td>Password</td><td> :</td><td><?php echo "$passwd"; ?></td>
		</tr>
	</table>
</form>

<?php

	$conn = mysqli_connect($host, $user, $password);
	mysqli_select_db($conn,'dbinsta');
	$sql = "insert into tbform values ('$email','$name','$username','$passwd')";
	$hasil = mysqli_query($conn,$sql);

?>
</body>
</html>