<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


<center>

	<?php include 'headerAdmin.php'; ?>

	
<table border="1"  class="table table-bordered table-striped">
	<tr>
		<th>member_id</th>
		<th>family_id</th>
		<th>name</th>
		<th>date_of_birth</th>
		<th>gender</th>
		<th>relationship</th>
		<th>sub_performance_duties</th>
	
		<th colspan="2">option</th>

	</tr>



	<?php 



	include 'connection.php';

	$select=mysqli_query($conn,"SELECT * FROM 21rp00722familymember");


	while ($data=mysqli_fetch_array($select)) {
		// code...

		?>

		<tr>
			<td><?php echo $data['member_id']; ?></td>
			<td><?php echo $data['family_id']; ?></td>
			<td><?php echo $data['name']; ?></td>
			<td><?php echo $data['date_of_birth']; ?></td>
			<td><?php echo $data['gender']; ?></td>
			<td><?php echo $data['relationship']; ?></td>
			<td><?php echo $data['sub_performance_duties']; ?></td>
			
			<td><a href="updateMember.php?UpdateId=<?php echo $data['member_id'];  ?>">Update</a></td>
			<td><a href="DeleteMember.php?DeleteId=<?php echo $data['member_id'];  ?>">Delete</a></td>
		


		</tr>
		<?php
	}
	 ?>
</table>


</center>











</body>
</html>