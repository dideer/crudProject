




<?php 


include 'connection.php';






if (isset($_POST['create'])) {





 $UserName=$_POST['UserName'];
 $Password=$_POST['Password'];
 $Role=$_POST['Role'];



 if (!preg_match("/^[a-zA-Z-']*$/",$UserName)) {
     // code...
    echo "<script>alert('The UserName name have  do not have number')</script>";
    include 'createUser.php';

 }
 else{



 $sql=mysqli_query($conn,"INSERT INTO 21rp00722user values('','$UserName','$Password','$Role')");



 if ($sql==true) {
 	// code...
 	include 'DisplayFamily.php';

 }
 else{
 	echo "try again";
 	include 'createUser.php';
 }


}

	
}

if (isset($_POST['AddFamily'])) {





 $FamilyName=$_POST['FamilyName'];
 $Sector=$_POST['Sector'];
 $District=$_POST['District'];

 if (!preg_match("/^[a-zA-Z-']*$/",$FamilyName)) {
     // code...
    echo "<script>alert('The FamilyName  have  do not have number')</script>";
    include 'createUser.php';
    
 }
  elseif (!preg_match("/^[a-zA-Z-']*$/",$Sector)) {
     // code...
    echo "<script>alert('The Sector name have  do not have number')</script>";
    include 'createUser.php';
    
 }
  elseif (!preg_match("/^[a-zA-Z-']*$/",$District)) {
     // code...
    echo "<script>alert('The District have  do not have number')</script>";
    include 'createUser.php';
    
 }
 else{



 $sql=mysqli_query($conn,"INSERT INTO 21rp00722family values('','$FamilyName','$Sector','$District')");



 if ($sql==true) {
    // code...
    include 'DisplayFamily.php';

 }
 else{
    echo "try again";
    include 'AddFamily.php';
 }

 }





	
}



if (isset($_POST['AddMember'])) {





 $family_id=$_POST['family_id'];
 $name=$_POST['name'];
 $date_of_birth=$_POST['date_of_birth'];
 $gender=$_POST['gender'];
 $relationship=$_POST['relationship'];
 $sub_performance_duties=$_POST['sub_performance_duties'];




 $sql=mysqli_query($conn,"INSERT INTO 21rp00722familymember values('','$family_id','$name','$date_of_birth','$gender','$relationship','$sub_performance_duties')");



 if ($sql==true) {
 	// code...
 	include 'DisplayMember.php';

 }
 else{
 	echo "try again";
 	include 'AddMember.php';
 }




	
}



if (isset($_POST['Addcontract'])) {





 $family_id=$_POST['family_id'];
 $start_date=$_POST['start_date'];
 $start_end=$_POST['start_end'];
 $contract_status='in progress';
 $performance_duties=$_POST['performance_duties'];





 $sql=mysqli_query($conn,"INSERT INTO 21rp00722performancecontract values('','$family_id','$start_date','$start_end','$contract_status','$performance_duties')");



 if ($sql==true) {
 	// code...
 	include 'DisplayContract.php';

 }
 else{
 	echo "try again";
 	include 'Addcontract.php';
 }




	
}









 ?>








