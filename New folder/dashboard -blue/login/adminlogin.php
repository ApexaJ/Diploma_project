<?php
include "conne.php";
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    if($email == 'apnamart@gmail.com' && $pass == '12345678'){
        session_start();
        $_SESSION['login'] = true;
        header('location:../dashboard.php');
    }
   else{
    header('location:../index.php');
   }

?>