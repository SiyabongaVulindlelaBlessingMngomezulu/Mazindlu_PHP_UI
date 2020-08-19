<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>SigarTech 2018</title>
	
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<style type="text/css">
	#main .module.width_full .module_content .stats_graph center table tr td table {
	font-size: 10px;
}
    </style>
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
			<h1 class="site_title"><a href="admin_home.php">SigarTech</a></h1>
			<h2 class="section_title">Admin Dashboard</h2>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
			<p><?php $_SESSION['myusername']; ?> (<a href="admin_home.php">Admin</a>)</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
	  <div class="breadcrumbs_container">
		<article class="breadcrumbs"><a href="admin_home.php">Home</a> <div class="breadcrumb_divider"></div>
		  <a class="current">View all Customers</a></article>
	  </div>
	</section><!-- end of secondary bar -->
	<aside id="sidebar" class="column">
		<br>
	  <h3>PROPERTIES</h3>
	  <ul class="toggle">
	    <li class="icn_new_article"><a href="admin_new.php">New Add Property</a></li>
	    <li class="icn_edit_article"><a href="admin_view.php">View Information</a></li>
	  </ul>
	  <h3>Books</h3>
	  <ul class="toggle">
	    <li class="icn_new_article"><a href="book_new.php">Add New Book</a></li>
	    <li class="icn_edit_article"><a href="book_view.php">View Information</a></li>
      </ul>
	  <h3>Users</h3>
	  <ul class="toggle">
	    <li class="icn_add_user"><a href="add_customer.php">Add Customer</a></li>
	    <li class="icn_view_users"><a href="view_customer.php">Find Customer</a></li>
	    <li class="icn_profile"><a href="view_all.php">View All</a></li>
      </ul>
	  <h3>Admin</h3>
	  <ul class="toggle">
	    <li class="icn_jump_back"><a href="setting.php">Setting</a></li>
	    <li class="icn_jump_back"><a href="logout.php">Logout</a></li>
      </ul>
	  <footer>
	    <hr />
	    <p><strong>Copyright &copy; 2018 SigarTech</strong></p>
	    <p>&nbsp;</p>
      </footer>
</aside>
	<!-- end of sidebar -->
	
	<section id="main" class="column">
	  <article class="module width_full">
<header><h3>Find Customer</h3></header>
			<div class="module_content">
            
            <?php
$db_hostname = 'localhost';
$db_username = 'root';
$db_password = '';
$db_database = 'property';

// Database Connection String
$con = mysqli_connect($db_hostname,$db_username,$db_password, $db_database);
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }

//mysqli_select_db($db_database, $con);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
<form action="" method="post">  
  <p>Search:
    <input name="term" type="text" class="module_content" placeholder="Name..." >
  <input type="submit" value="Submit" />
  </p>
  <p><br />
  </p>

</form>  
<?php
if (!empty($_REQUEST['term'])) {

$term = mysqli_real_escape_string($con, $_REQUEST['term']);     

$sql = "SELECT * FROM customer WHERE name LIKE '%".$term."%'"; 
$r_query = mysqli_query($con, $sql); 

while ($row = mysqli_fetch_array($r_query)){  
echo 'Primary key			: ' .$row['cus_id'];  
echo '<br /> Code			: ' .$row['id_property'];  
echo '<br /> Description	: '	.$row['name'];  
echo '<br /> Category		: '	.$row['mobile_phone'];  
echo '<br /> Cut Size		: '	.$row['date'];    
 
}  

}
?>
    </body>
</html>
            
            
			  <div class="clear"></div>
			</div>
		</article><!-- end of stats article --><!-- end of content manager article --><!-- end of messages article -->
		
		<div class="clear"></div><!-- end of post new article --><!-- end of styles article -->
	  <div class="spacer"></div>
	</section>


</body>

</html>