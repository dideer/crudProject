<?php 

session_start();


 if (isset($_POST['Login'])) {
     // code...

    include 'connection.php';

    $UserName=$_POST['UserName'];
    $Password=$_POST['Password'];


     if (!preg_match("/^[a-zA-Z-']*$/",$UserName)) {
     // code...
    echo "<script>alert('The UserName name have  do not have number')</script>";
    include 'login.php';

 }
 else{



    $select=mysqli_query($conn,"SELECT * FROM 21rp00722USER WHERE UserName='$UserName' and Password='$Password'");



    $row=mysqli_num_rows($select);

    if ($row==1) {
        // code...

        $data=mysqli_fetch_array($select);


        $Role=$data['Role'];


        if ($Role=='admin') {
            // code...
        

        $_SESSION['SessionUserName']=$UserName;
        
            $_SESSION['SessionPassword']=$Password;


            echo "<script>alert('you are  allow to enter')</script>";

            header('location:displayFamily.php');
}

else{


      $_SESSION['SessionUserName']=$UserName;
        
            $_SESSION['SessionPassword']=$Password;


            echo "<script>alert('you are  allow to enter')</script>";

            header('location:user/displayFamily.php');



}


    } else{



        echo "<script>alert('Try Again ')</script>";

            include 'login.php';
    }



 }




 }

















 ?>