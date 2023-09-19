<!DOCTYPE html>
<html>
<head>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<script type="text/javascript" src="jquery/jquery.min.js"></script>
	<title></title>
</head>
</head>
<body>


<center>

	<?php include 'headerAdmin.php'; ?>
	
<table>
	
<form method="POST" action="insert.php">
<tr>
	<th></th>
	<th>Add Family Member Page</th>
	<th></th>

</tr>

<tr>
	
</tr>
<tr>
	<td>Family Name</td>
	<td><select name="family_id" class="form-control">
		<?php 

		include 'connection.php';

		$sql=mysqli_query($conn,"SELECT * FROM 21rp00722Family");

		while ($data=mysqli_fetch_array($sql)) {
			// code...
			?>
			<option value="<?php echo $data['FamilyId'] ?>"> <?php echo $data['FamilyName']; ?> </option>
			<?php
		}

		 ?>	

	</select></td>
</tr>

<tr>
	<td>start Date</td>
	<td><input type="date" name="start_date"></td>
</tr>
<tr>
	<td>start End</td>
	<td><input type="date" name="start_end"></td>
</tr>



<tr>
	<td>performance duties</td>
	<td><input type="text" name="performance_duties"></td>
</tr>




<tr>
	<td></td>
	<td><button type="submit" name="Addcontract">Add</button></td>
	<td></td>
</tr>

</form>
</table>



</center>














</body>
</html>