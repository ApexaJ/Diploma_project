<?php
include 'connection.php';
echo $pname = $_POST['pname'];

echo $category = $_POST['category'];
echo $desc = $_POST['desc'];
$price = $_POST['price'];

$work = $_POST['Work'];

$imageNameUpload = "upload/";
if (isset($_FILES['image']['name'])) {

    $image_name = $_FILES['image']['name'];
    if ($image_name != "") {
        $ext = end(explode('.', $image_name));

        $image_name = $pname . rand(000, 999) . '.' . $ext; //e.g service_category_834.jpg
        $imageNameUpload = $imageNameUpload . $image_name;
        $src = $_FILES['image']['tmp_name'];

        $dst = "upload/" . $image_name;

        //finally upload the image 
        $upload = move_uploaded_file($src, $dst);
    }
} else {
    $image_name = ""; //setting deafult value as a blank
}

if ($work == "add") {
   echo $sql = "INSERT INTO `tbl_product`( `productName`, `catId`, `brandId`, `body`, `price`, `image`,`type`) VALUES ('$pname','1','2','$desc','$price','$imageNameUpload','$category')";
    $result = mysqli_query($con, $sql);
} else {
    echo $pid = $_POST['productId'];
   echo  $sql = "UPDATE `tbl_product` SET `productName`='$pname',`body`='$desc',`price`='$price',`type`='$category',`image` = '$imageNameUpload' WHERE `productId`='$pid';";
    $result = mysqli_query($con, $sql);
}



if ($result) {
    header('location:product.php');
} else {
    header('location:product.php');
}


?>