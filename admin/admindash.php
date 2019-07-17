<?php

		session_start();

		if($_SESSION['uid'])
		{
			echo "";
		}
		else
		{
			header('location: ../login.php');
		}
?>

<?php
	include('header.php');
?>

	<div class="admintitle" align="center">
		<h1>Welcome to admin dashboad </h1>
		<h4 align="right"><a href="Logout.php">Logout</a></h4>
	</div>

	<div class="dashboad" border="1" style="width: 50%" align="center">

		<table">
			<tr>
				<td><a href="addstudent.php"><h3>1 Insert student details</h3></a></td>
			</tr>
			<tr>
				<td><a href="update.php"><h3>2 Update student details</h3></a></td>
			</tr>
			<tr>
				<td><a href="delete.php"><h3>3 Delete student details</h3></a></td>
			</tr>

		
		</table>
		
	</div>

</body>
</html>