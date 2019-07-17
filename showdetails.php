<?php

	

	function showdetails($standard,$rollno)

	{
		include('dbcon.php');

		$sql="SELECT * FROM `student` WHERE `standard`='$standard' AND `rollnum`= '$rollno' ";

		$run=mysqli_query($conn,$sql);

		

	if(mysqli_num_rows($run)>0)
	{
		$data=mysqli_fetch_assoc($run);
		?>

		<table border="1" style="width: 80%;" align="center">
			<tr>
				<th colspan="3">student details</th>
			</tr>

			<tr>
				<td rowspan="5"> <img src="dataimg/<?php echo $data['img'];?>" style="max-height: 120px; max-width: 120px;">
					
				</td>

				<th>roll no</th>
				<td><?php echo $data['rollnum']; ?></td>			
			</tr>
					
			<tr>
				<th>name</th>
				<td><?php echo $data['name']; ?></td>			
			</tr>


			<tr>
				<th>city</th>
				<td><?php echo $data['city']; ?></td>			
			</tr>

			<tr>
				<th>contact</th>
				<td><?php echo $data['contact']; ?></td>			
			</tr>

			<tr>
				<th>standard</th>
				<td><?php echo $data['standard']; ?></td>			
			</tr>
		</table>

		<?php

	}
	else
	{
		echo "<script>alert('no student found'); </script> ";
	}
	
	}

?>