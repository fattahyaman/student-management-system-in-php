<?php
	include('header.php');
	include('titlehead.php');

?>

<table align="center">
	<form method="post" action="update.php">
		 

		<tr>
			<th>enter standard</th>
			<td><input type="number" name="standard" placeholder="enter standard" required></td>

			<th>enter student Name</th>
			<td><input type="text" name="stuname" placeholder="enter student name" required></td>
		</tr>
		
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="search"></td>
		</tr>
	
	</form>	
</table>


<table align="center" width="70%" border="1">
	<tr>
		<th>no</th>
		<th>image</th>
		<th>name</th>
		<th>rollno</th>
		<th>edit</th>
	</tr>
	<?php
if(isset($_POST['submit']))
{
	include('../dbcon.php');

	$standard = $_POST['standard'] ;
	$name = $_POST['stuname'] ;

	$qry=	"SELECT * FROM `student` WHERE `standard` = '$standard' AND `name`  LIKE '%$name%' ";

	$run=mysqli_query($conn,$qry);
	
	if (mysqli_num_rows($run)<1) {
		
		echo "<tr><td colspan='5'>no record found </tr></td>";
	}
	else
	{
		$count=0;
		while ($data=mysqli_fetch_assoc($run)) {
			$count++;
			?>
			<tr>
				<td><?php echo $count; ?></td>
			<td>image</td>
			<td><?php echo $data['name']; ?></td>
			<td><?php echo $data['rollnum']; ?></td>
			<td><a href="updateform.php?sid=<?php echo $data['id'] ?>">edit</a></td>

		</tr>
			<?php
		}
	}
}


?>
</table>

