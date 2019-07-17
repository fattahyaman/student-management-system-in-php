<?php
	include('header.php');
	include('titlehead.php');
	include('../dbcon.php');

	$sid=$_GET['sid'];
	$qry="SELECT * FROM `student` WHERE `id` ='$sid'"; 

	$run=mysqli_query($conn,$qry);
	$data=mysqli_fetch_assoc($run);

?>

<form method="post" action="updatedata.php" enctype="multipart/form-data">
		 
	<table align="center" border="1" style="width: 70%; margin-top:40px;">
		<tr>
			<th>Roll No</th>
			<td><input type="text" name="rollno" value=<?php echo $data['rollnum']; ?> required></td>
		</tr>
		<tr>
			<th>Name</th>
			<td><input type="text" name="name" value=<?php echo $data['name']; ?> required></td>
		</tr>
		<tr>
			<th>City</th>
			<td><input type="text" name="city" value=<?php echo $data['city']; ?> required></td>
		</tr>
		<tr>
			<th>contact</th>
			<td><input type="text" name="contact" value=<?php echo $data['contact']; ?> required></td>
		</tr>
		<tr>
			<th>standard</th>
			<td><input type="number" name="standard" value=<?php echo $data['standard']; ?> required></td>
		</tr>
		<tr>
			<th>img</th>
			<td><input type="file" name="simg" required></td>
		</tr>
		<tr>
			<td colspan="2" align="center">

				<input type="hidden" name="sid"  value=<?php echo $data['id']; ?> >

				<input type="submit" name="submit" value="submit">

			</td>
		</tr>

	</table>

</form>