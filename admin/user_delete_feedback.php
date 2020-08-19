<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>SigarTech 2018</title>
	
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="js/hideshow.js" type="text/javascript"></script>
	<script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.equalHeight.js"></script>
	<script type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>

</head>


<body>

	<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="user_home.php">SigarTech</a></h1>
			<h2 class="section_title">User Dashboard</h2>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
			<p><?
				$user_firstname = $_SESSION['user_firstname'];
				echo $user_firstname;
			?> <a href="user_home.php"><?php 
			$user_lastname = $_SESSION['user_lastname'];
			echo $user_lastname;?></a></p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="user_home.php">Home</a> <div class="breadcrumb_divider"></div>
			<a class="current">User</a></article>
		</div>
	</section><!-- end of secondary bar -->
	
<aside id="sidebar" class="column">
<br>
		<h3>Property</h3>
		<ul class="toggle">
			<li class="icn_new_article"><a href="user_new.php">Add New Property</a></li>
			<li class="icn_edit_article"><a href="user_view.php">View Information</a></li>
		</ul>
		<h3>Books</h3>
	  <ul class="toggle">
	    <li class="icn_new_article"><a href="user_book_new.php">Add New Book</a></li>
	    <li class="icn_edit_article"><a href="user_book_view.php">View Information</a></li>
      </ul>
	   <!--<h3>Users</h3>
		<ul class="toggle">
			<li class="icn_add_user"><a href="add_customer.php">Add Customer</a></li>
			<li class="icn_view_users"><a href="view_customer.php">Find Customer</a></li>
			<li class="icn_profile"><a href="view_all.php">View All</a></li>
		</ul>-->
		<h3>User</h3>
		<ul class="toggle">
		    <li class="icn_edit_article"><a href="../edit-profile.php">Edit profile</a></li>
			<li class="icn_jump_back"><a href="user_logout.php">Logout</a></li>
		</ul>
		
		<br>

		<br>
		<footer>
			<hr />
			<p><strong>Copyright &copy; 2018 SigarTech</strong></p>
			<p>&nbsp;</p>
		</footer>
	</aside><!-- end of sidebar -->
	
	<section id="main" class="column">
		
		<!-- end of stats article --><!-- end of content manager article --><!-- end of messages article -->
		
	  <div class="clear"></div>
		
		<article class="module width_full">
			<header><h3>Feedback deleted</h3></header>
			<p>
<?php

$host="localhost";
$username="root";
$password="";
$db_name="property";
$tbl_name="feedback";

$con = mysqli_connect("$host","$username","$password", "$db_name")or die("cannot connect");
//mysql_select_db("$db_name")or die("cannot select DB");

$id_feedback=$_GET['id_feedback'];

$sql="DELETE FROM $tbl_name WHERE id_feedback='$id_feedback'";
$result=mysqli_query($con, $sql);

if($result)
{
echo "<a href='user_home.php'><h4 class='alert_success'>A Success Message</h4></a>";
}

else{
	echo"ERROR";
}

mysqli_close($con);
?>

			<p>&nbsp;</p>
			<footer>
		  </footer>
		</article><!-- end of post new article --><!-- end of styles article -->
	  <div class="spacer"></div>
	</section>


</body>

</html>