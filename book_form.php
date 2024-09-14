<?php
include "contact_connection.php";

if(isset($_POST['sname'])){
    
    $query="INSERT INTO `bookform`(`name`, `email`, `mobile`, `address`, `location`, `guests`, `arrivals`, `leaving`,`payment`, `through`) 
    VALUES ('".$_POST['sname']."','".$_POST['semail']."','".$_POST['smobile']."','".$_POST['saddress']."','".$_POST['slocation']."','".$_POST['sguests']."','".$_POST['sarrivals']."','".$_POST['sleaving']."','".$_POST['spayment']."','".$_POST['sthrough']."')";

    $row = mysqli_query($conn, $query);
    
    if($row){
        header("location: index.php");
        exit;
    }
    else {
        echo "Error";
    }
    
}
?>
