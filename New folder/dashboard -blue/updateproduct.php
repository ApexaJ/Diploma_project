<?php
    include 'connection.php';
    echo $pname = $_POST['pname1'];
    echo $category = $_POST['category1'];
    echo $desc = $_POST['desc1'];
   echo $price = $_POST['price1'];
   echo $pid = $_POST['productId'];
   
    $sql = "UPDATE `tbl_product` SET `productName`='$pname',`body`='$desc',`price`='$price',`type`='$category' WHERE `productId`=$pid";
    $result = mysqli_query($con,$sql);

    if($result){
         header('location:product.php');
    }
    else{
         header('location:product.php');
    }
?>

