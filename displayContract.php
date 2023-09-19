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
		<th>contract_id</th>
		<th>family_id</th>
		<th>start_date</th>
		<th>start_end</th>
		<th>contract_status</th>
		<th>performance_duties</th>
		
	
		<th colspan="2">option</th>

	</tr>



	<?php 



	include 'connection.php';

	$select=mysqli_query($conn,"SELECT * FROM 21rp00722performancecontract");


	while ($data=mysqli_fetch_array($select)) {
		// code...

		?>

		<tr>
			<td><?php echo $data['contract_id']; ?></td>
			<td><?php echo $data['family_id']; ?></td>
			<td><?php echo $data['start_date']; ?></td>
			<td><?php echo $data['end_date']; ?></td>
			<td><?php echo $data['contract_status']; ?></td>
			<td><?php echo $data['performance_duties']; ?></td>
			
			
			<td><a href="updateContract.php?UpdateId=<?php echo $data['contract_id'];  ?>">Update</a></td>
			<td><a href="DeleteContract.php?DeleteId=<?php echo $data['contract_id'];  ?>">Delete</a></td>
		


		</tr>
		<?php
	}
	 ?>
</table>


</center>











</body>
</html>