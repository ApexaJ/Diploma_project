<?php
include 'connection.php';
echo $name = $_POST['name'];
echo "<br>";
echo $email = $_POST['email'];
echo "<br>";
echo $mobile = $_POST['mobile'];
echo "<br>";
echo $subject = $_POST['subject'];
echo "<br>";
$que = mysqli_query($con, "INSERT INTO `contact`(`name`, `email`, `mobile`, `subject`) VALUES ('$name','$email','$mobile','$subject');");
// $que = mysqli_query($con, "select * from contact");
if ($que) {

    header('location:contact.php');
} else {
    echo 'error';
}

?>