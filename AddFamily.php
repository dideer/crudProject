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
	
<table>
	
<form method="POST" action="insert.php">
<tr>
	<th></th>
	<th>Add Family Page</th>
	<th></th>

</tr>

<tr>
	
</tr>
<tr>
	<td>Family Name</td>
	<td><input type="text" name="FamilyName"></td>
</tr>
<tr>
	<td>Sector</td>
	<td><input type="text" name="Sector"></td>
</tr>

<tr>
	<td>District</td>
	<td><input type="text" name="District"></td>
</tr>



<tr>
	<td></td>
	<td><button type="submit" name="AddFamily">Add</button></td>
	<td></td>
</tr>

</form>
</table>



</center>














</body>
</html>