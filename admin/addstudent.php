
<?php
	include('header.php');
	include('titlehead.php');

?>
<!DOCTYPE html>
<html>
<body>

<form method="post" action="addstudent.php" enctype="multipart/form-data">
		 
	<table align="center" border="1" style="width: 70%; margin-top:40px;">
		<tr>
			<th>Roll No</th>
			<td><input type="text" name="rollno" placeholder="enter roll no" required></td>
		</tr>
		<tr>
			<th>Name</th>
			<td><input type="text" name="name" placeholder="enter name" required></td>
		</tr>
		<tr>
			<th>City</th>
			<td><input type="text" name="city" placeholder="enter city" required></td>
		</tr>
		<tr>
			<th>contact</th>
			<td><input type="text" name="contact" placeholder="enter contact" required></td>
		</tr>
		<tr>
			<th>standard</th>
			<td><input type="number" name="standard" placeholder="enter standard" required></td>
		</tr>
		<tr>
			<th>img</th>
			<td><input type="file" name="simg" required></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td>
		</tr>

	</table>

</form>
	</body>
</html>

<?php



if(isset($_POST['submit']))
{
	include('../dbcon.php');

	$rollno = $_POST['rollno'] ;
	$name = $_POST['name'] ;
	$city = $_POST['city'] ;
	$contact = $_POST['contact'] ;
	$standard = $_POST['standard'] ;

	$imagename = $_FILES['simg']['name'];
	$tempname = $_FILES['simg']['tmp_name'];

	move_uploaded_file($tempname,"../dataimg/$imagename");

	$qry="INSERT INTO `student`(`rollnum`, `name`, `city`, `contact`, `standard`, `img`) VALUES ('$rollno','$name','$city','$contact','$standard','$imagename' )";

	$run=mysqli_query($conn,$qry);
	
	if($run == true)
	{
		?>

		<script>
			alert("data inserted successfully");
		</script>

		<?php

	}

	
	
}

?>
