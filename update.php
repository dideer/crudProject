






<?php 


include 'connection.php';






if (isset($_POST['UpdateFamily'])) {

$FamilyId=$_POST['FamilyId'];
 $FamilyName=$_POST['FamilyName'];
 $Sector=$_POST['Sector'];
 $District=$_POST['District'];


 $sql=mysqli_query($conn,"UPDATE 21rp00722family SET FamilyName='$FamilyName',Sector='$Sector',District='$District' where FamilyId='$FamilyId'");



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


















