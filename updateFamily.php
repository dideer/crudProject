<?php 


include 'connection.php';
if (isset($_GET['UpdateId'])) {
	// code...

	$Id=$_GET['UpdateId'];


	$select=mysqli_query($conn,"SELECT * FROM 21rp00722family WHERE FamilyId='$Id'");

	$data=mysqli_fetch_array($select);


 $FamilyId=$data['FamilyId'];
 $FamilyName=$data['FamilyName'];
 $Sector=$data['Sector'];
 $District=$data['District'];




}





 ?>












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

	
<table>
	
<form method="POST" action="update.php">
<tr>
	<th></th>
	<th>Update Family Page</th>
	<th></th>

</tr>

<tr>
	
</tr>

<input type="hidden" name="FamilyId" value="<?php echo $FamilyId ?>">
<tr>
	<td>Family Name</td>
	<td><input type="text" name="FamilyName" value="<?php echo $FamilyName ?>"></td>
</tr>
<tr>
	<td>Sector</td>
	<td><input type="text" name="Sector" value="<?php echo $Sector ?>"></td>
</tr>

<tr>
	<td>District</td>
	<td><input type="text" name="District" value="<?php echo $District ?>"></td>
</tr>



<tr>
	<td></td>
	<td><button type="submit" name="UpdateFamily">Update</button></td>
	<td></td>
</tr>

</form>
</table>



</center>














</body>
</html>