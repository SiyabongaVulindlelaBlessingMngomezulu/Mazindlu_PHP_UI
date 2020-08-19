<?php

//database connection information
$host="127.0.0.1:3306";
$user="root";
$password="";
$db=mysqli_connect($host, $user, $password, "property") or
die(mysqli_error());
//mysql_select_db("property",$db);
?>