<!DOCTYPE html>
<html>
<head>
	<title>admin login</title>
</head>
<body>
	<h1 align="center">Admin login</h1>
	<form action="login.php" method="post">
		<table align="center">
			<tr>
				<td>Username</td><td><input type="text" name="uname" value="" required></td>
			</tr>
			<tr>
				<td>Password</td><td><input type="Password" name="pass" value="" required></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="login" value="Login">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php
include('dbcon.php');

if(isset($_POST['login']))
{
	$username = $_POST['uname'];
	$password = $_POST['pass'];

	$qry="SELECT * FROM admin WHERE username = '$username' and password = '$password' ";
	$result=mysqli_query($conn,$qry);
	$row= mysqli_num_rows($result);


	if($row<1)
	{
		?>
		<script>
		alert("username and password is incorrect");
		window.open('login.php','_self');

		</script>

		<?php

	}
	else
	{
		$data=mysqli_fetch_assoc($result);
		$id=$data['id'];
		session_start();
		$_SESSION['uid'] = $id;
		header('location:admin/admindash.php');
	}
}

?>