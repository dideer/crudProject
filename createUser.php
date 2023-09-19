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
	
<form method="POST" action="insert.php">
<tr>
	<th></th>
	<th>Create User Page</th>
	<th></th>

</tr>

<tr>
	
</tr>
<tr>
	<td>UserName</td>
	<td><input type="text" name="UserName"></td>
</tr>
<tr>
	<td>Password</td>
	<td><input type="password" name="Password"></td>
</tr>
<tr>
	<td>Role</td>
	<td><select name="Role">
		<option value="intore">intore mu ikoranabuhanga</option>
		<option value="admin">administrative authority</option>

	</select></td>
</tr>




<tr>
	<td></td>
	<td><button type="submit" name="create">Create</button></td>
	<td></td>
</tr>

</form>
</table>



</center>














</body>
</html>