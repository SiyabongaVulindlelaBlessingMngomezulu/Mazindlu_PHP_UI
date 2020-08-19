<?php
    session_start();
    error_reporting(E_ALL & ~E_NOTICE);
    require '_database/database.php';
    if($_SESSION['user_username']){
        header("location:admin/user_home.php");
    }
?>