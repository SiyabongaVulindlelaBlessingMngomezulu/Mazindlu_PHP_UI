<?php
    session_start();
    error_reporting(E_ALL & ~E_NOTICE);
    require '_database/database.php';
    $user_username = mysqli_real_escape_string($database,$_REQUEST['user_username']);
    if(!$_SESSION['user_username']){
        header("location:$user_username");
    }
?>