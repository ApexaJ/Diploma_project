<?php
    include 'connection.php';
   
    $pid = $_GET['pid'];
   
    $sql = "DELETE FROM `tbl_product` WHERE `productId`=$pid";
    $result = mysqli_query($con,$sql);

    if($result){
         header('location:product.php');
    }
    else{
         header('location:product.php');
    }
?>

