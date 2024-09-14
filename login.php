<?php
include "contact_connection.php";

if(isset($_POST['susername'])){
    
    $query="INSERT INTO `loginform`(`username`, `password`) VALUES ('".$_POST['susername']."','".$_POST['spassword']."')";
    
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
