<?php
include "contact_connection.php";
if(isset($_POST['sfullname'])){
    
    $query="INSERT INTO `enquiryform`(`Full_Name`, `Father_Name`, `Mother_Name`, `Date_of_Birth`, `Password`, `Email`, `Mobile_Number`, `Gender`, `City`) VALUES ('".$_POST['sfullname']."','".$_POST['sfathername']."','".$_POST['smothername']."','".$_POST['sdateofbirth']."','".$_POST['spassword']."','".$_POST['semail']."','".$_POST['smobile']."','".$_POST['sgender']."','".$_POST['scity']."')";
    $row=mysqli_query($conn, $query);
    if($row){
        header ("location:admin.php");
    }
    else{
        echo "error";
    }
}
?>