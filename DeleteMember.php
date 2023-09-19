<?php 

if (isset($_GET['DeleteId'])) {
	// code...
	include 'connection.php';
	$Id=$_GET['DeleteId'];

	$sql=mysqli_query($conn,"DELETE from 21rp00722familymember where member_id='$Id'");


	 if ($sql==true) {
 	// code...
 	include 'DisplayMember.php';

 }
 else{
 	echo "Byanze";
 	include 'DisplayMember.php';
 	
 }
}













 ?>