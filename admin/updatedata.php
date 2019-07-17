
<?php

include('../dbcon.php');

$rollno = $_POST['rollno'] ;
	$name = $_POST['name'] ;
	$city = $_POST['city'] ;
	$contact = $_POST['contact'] ;
	$standard = $_POST['standard'] ;
	$id = $_POST['sid'] ;

	$imagename = $_FILES['simg']['name'];
	$tempname = $_FILES['simg']['tmp_name'];

	move_uploaded_file($tempname,"../dataimg/$imagename");

	$qry="UPDATE `student` SET `rollnum` = '$rollno', `name` = '$name', `city` = '$city', `contact` = '$contact', `standard` = '$standard', `img` = '$imagename' WHERE `id` = $id ";

	$run=mysqli_query($conn,$qry);
	
	if($run == true)
	{
		?>

		<script>
			alert("data inserted successfully");
			window.open('updateform.php?sid=<?php echo $id; ?>', '_self');
		</script>

		<?php

	}
	
?>