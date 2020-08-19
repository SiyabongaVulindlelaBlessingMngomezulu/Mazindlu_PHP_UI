               <?php session_start(); 
				ob_start();
				$host="localhost";         //Host Name
				$username="root";        //Mysql usernae
				$password="";              //Mysql password
				$db_name="user";       //Database name
				$tbl_name="user";     //Table name
				
				//Connect to server and select database
				$con = mysqli_connect("$host", "$username", "$password")or die("cannot connect");
				mysqli_select_db($con, "$db_name")or die("cannot select DB");
				
				//Define $myusername and $mypassword
				$user_username=$_POST['user_username'];
				$user_password=$_POST['user_password'];
				
				
				//To protect MYSQL injection (more detail about MySQL injection)
				$user_username  =  stripslashes($user_username);
				$user_password  =  stripslashes($user_password);
				$user_username  =  mysqli_real_escape_string($con, $user_username);
				$user_password  =  mysqli_real_escape_string($con, $user_password);
				
				$sql="SELECT * FROM user WHERE user_username= '$user_username'  and  user_password= '$user_password'";
				
				$result=mysqli_query($con, $sql);
				
				//Mysql_num_row is counting table row
				$count=mysqli_num_rows($result);
				//  If  result matched $user_usename  and $user_password, table row must be 1 row
				while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
					$user_firstname = $row['user_firstname'];
					$user_lastname = $row['user_lastname'];
					$user_id = $row['user_id'];
				}
				$back = "../index.html";
				if($count==1){
				//  Register  $user_username, $user_password  and redirect to file "adminMenu.php"
$_SESSION['user_username']=$user_username;
$_SESSION['user_password']=$user_password;
$_SESSION['user_firstname']=$user_firstname;
$_SESSION['user_lastname']=$user_lastname;
$_SESSION['user_id'] = $user_id;

//session_start();
mysqli_free_result($result);
mysqli_close($con);
header("location:user_home.php");
}
else {
echo "Wrong Username or Password 	Go back to <a href = '$back' > Home </a> ";
}

ob_end_flush();
?>