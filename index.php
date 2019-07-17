<!DOCTYPE html>
<html>
<head>
	<title>Student management system</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body >
	<h1 align="center"> Welcome to the student management system</h1>
	<h3 align="right"><a href="login.php">Admin login</a></h3>

	<form method="post" action="index.php">
		<table style="width: 50%;" align="center">
			<tr>
				<td colspan="2" align="center"><h1>Student Information</h1></td>
			</tr>

			<tr>
				<td>Choose Standad</td>
				<td>
					<select name="std">
						<option value="1">1st</option>
						<option value="2">2st</option>
						<option value="3">3st</option>
						<option value="4">4st</option>
						<option value="5">5st</option>
						<option value="6">6st</option>
					</select>
				</td>
			</tr>

			<tr>
				<td>Enter Roll No</td>
				<td>
					<input type="text"  name="rollno" required>
				</td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" class="button" name="submit" value="Show Details">
				</td>
			</tr>

		</table>
	</form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
	$standard = $_POST['std'] ;
	$rollno = $_POST['rollno'] ;
	include('dbcon.php');
	include('showdetails.php');
	showdetails($standard,$rollno);
	}
?>