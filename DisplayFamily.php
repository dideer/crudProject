

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<script type="text/javascript" src="jquery/jquery.min.js"></script>
	<title></title>
</head>
<body>


<center>
	<?php include 'headerAdmin.php'; ?>
	
<table border="1" class="table table-bordered table-striped">
	<tr>
		<th>FamilyId</th>
		<th>FamilyName</th>
		<th>Sector</th>
		<th>District</th>
		<th colspan="2">option</th>

	</tr>



	<?php 



	include 'connection.php';

	$select=mysqli_query($conn,"SELECT * FROM 21rp00722family");


	while ($data=mysqli_fetch_array($select)) {
		// code...

		?>

		<tr>
			<td><?php echo $data['FamilyId']; ?></td>
			<td><?php echo $data['FamilyName']; ?></td>
			<td><?php echo $data['Sector']; ?></td>
			<td><?php echo $data['District']; ?></td>
			<td><a href="updatefamily.php?UpdateId=<?php echo $data['FamilyId'];  ?>">Update</a></td>
			<td><a href="DeleteFamily.php?DeleteId=<?php echo $data['FamilyId'];  ?>">Delete</a></td>
		


		</tr>
		<?php
	}
	 ?>
</table>


</center>











</body>
</html>