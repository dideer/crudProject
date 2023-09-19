<?php 

if (isset($_GET['DeleteId'])) {
	// code...
	include 'connection.php';
	$Id=$_GET['DeleteId'];

	$sql=mysqli_query($conn,"DELETE from 21rp00722family where FamilyId='$Id'");


	 if ($sql==true) {
 	// code...
 	include 'DisplayFamily.php';

 }
 else{
 	echo "Byanze";
 	include 'DisplayFamily.php';
 	
 }
}













 ?>