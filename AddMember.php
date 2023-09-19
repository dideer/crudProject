<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


<center>

	
	
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
	<td><select name="family_id">
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
	<td>Name</td>
	<td><input type="text" name="name"></td>
</tr>

<tr>
	<td>date of birth</td>
	<td><input type="date" name="date_of_birth"></td>
</tr>

<tr>
	<td>Gender</td>
	<td><input type="radio" name="gender" value="Male">Male<input type="radio" name="gender" value="Female">Female</td>
</tr>
<tr>
	<td>Relationship</td>
	<td><select name="relationship">
		<option value="parent">parent</option>
		<option value="child">child</option>
		<option value="sibling">sibling</option>
		


	</select></td>
</tr>

<tr>
	<td>Sub performance duties</td>
	<td><input type="text" name="sub_performance_duties"></td>
</tr>




<tr>
	<td></td>
	<td><button type="submit" name="AddMember">Add</button></td>
	<td></td>
</tr>

</form>
</table>



</center>














</body>
</html>