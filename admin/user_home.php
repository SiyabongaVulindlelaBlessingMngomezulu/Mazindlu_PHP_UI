<?php 
session_start();
if($_SESSION["user_username"]=="")
{	
?>
	<script type="text/javascript">
		window.location="user_login.php";
    </script>
<?php 
}
	$user_username = $_SESSION["user_username"];
	include "connection.php"; 
	include "database.php";
	
?>

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
	  <article class="module width_full">
		  <header>
			  <h3>User Information Desk</h3></header>
	    <div class="module_content">
			  <article class="stats_graph"> 
			  <br>
			<?php
        
        $host="localhost";
        $username="root";
        $password="";
        $db_name="property";
        $tbl_name="admin";
        
        mysqli_connect("$host","$username","$password")or die("cannot connect");
        mysqli_select_db($db, "$db_name")or die("cannot select DB");
        $sql="SELECT*FROM $tbl_name";
        $result=mysqli_query($db, $sql);
        ?>
        
        
        <!--<table width="638" height="138" border="2" cellpadding="1" cellspacing="0">
        <tr>
        <td colspan="13" align="center"><strong>Admin Information</strong></td>
        </tr>
        
        <tr>
        <td width="81" align="center"><font color="black"><strong>Image</strong></td>
        <td width="190" align="center"><font color="black"><strong>Name</strong></td>
        <td width="140" align="center"><strong>Username</strong></td>
        <td width="138" align="center"><font color="black"><strong>Password</strong></td>
        
        
        </tr>
        
        <?php
        while($rows=mysqli_fetch_array ($result))
        {
        ?>
        
        <tr>
        <td height="88"><font color="black"><img src="images/<?php echo $rows['user_username'];?>.jpg" width="81" height="81"></td
        ><td height="88"><font color="black"><?php echo $rows['name'];?></td
        ><td width="140"><font color="black"><?php echo $rows['user_username'];?></td
        ><td><font color="black"><?php echo $rows['user_password'];?></td
        ><td width="65" align="center"><a href="delete_admin.php?name=<?php echo $rows['name'];?>" onClick="alert('Are you sure want to DELETE this data????');">DELETE</a></td>
        
        
        </tr>
        
        
        <?php
        
        }
        
        ?>
        
        </table>-->
        
        </td>
       
        </tr>
        
        </table>
        </center>
        <?php
        mysqli_close($db);
        ?>


</table>


 </article>
			  <div class="clear">
			    <form name="form2" method="post" action="update.php">
			    </form>
			  </div>
	    </div>
		</article><!-- end of stats article -->
		
		<article class="module width_3_quarter">
		<header><h3 class="tabs_involved">Content </h3>
		<ul class="tabs">
   			<li><a href="#tab1">ContactMe</a></li>
    		<li><a href="#tab2">Message</a></li>
		</ul>
		</header>
			<?php
        
        $host="localhost";
        $username="root";
        $password="";
        $db_name="property";
        $tbl_name="feedback";
        
        $con = mysqli_connect("$host","$username","$password", "$db_name") or die("cannot connect");
        //mysqli_select_db("$db_name")or die("cannot select DB");
        $sql="SELECT*FROM $tbl_name ORDER BY id_feedback DESC";
        $result=mysqli_query($con, $sql);
        ?>
			
			<div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
   					<th width="6%"></th> 
    				<th width="29%">Reason</th> 
    				<th width="30%">Name</th> 
    				<th width="24%">Email</th> 
    				<th width="11%">Action</th> 
				</tr> 
			</thead> 
        
        <?php
        while($row=mysqli_fetch_array($result))
        {
        ?>
            
			<tbody> 
				<tr> 
   					<td><input type="checkbox"></td> 
    				<td><?php echo $row['reason'];?></td> 
    				<td><?php echo $row['name'];?></td> 
    				<td><?php echo $row['question'];?></td> 
    				<td>
                    <a href="user_delete_feedback.php?id_feedback=<?php echo $row['id_feedback'];?>" onClick="alert('Are you sure want to DELETE this data????');"><img src="images/icn_trash.png"></a></td> 
				</tr>
            
        <?php
        
        }
        
        ?>

			</tbody> 
			</table>

            
        <?php
		mysqli_free_result($result);
        mysqli_close($con);
        ?>
			</div><!-- end of #tab1 -->
			<?php
        
        $host="localhost";
        $username="root";
        $password="";
        $db_name="property";
        $tbl_name="message";
        
        $con = mysqli_connect("$host","$username","$password", "$db_name")or die("cannot connect");
        //mysqli_select_db("$db_name")or die("cannot select DB");
        $sql="SELECT*FROM $tbl_name ORDER BY id_message DESC";
        $result=mysqli_query($con, $sql);
        ?>
			
			<div id="tab2" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
   					<th width="6%"></th> 
    				<th width="30%">Name</th> 
    				<th width="29%">Contact</th> 
    				<th width="24%">Email</th> 
    				<th width="11%">Actions</th> 
				</tr> 
			</thead> 
        
        <?php
        while($row=mysqli_fetch_array ($result))
        {
        ?>
            
			<tbody> 
				<tr> 
   					<td><input type="checkbox"></td> 
    				<td><?php echo $row['name'];?></td> 
    				<td><?php echo $row['no_fon'];?></td> 
    				<td><?php echo $row['email'];?></td> 
    				<td><a href="user_delete_message.php?name=<?php echo $row['name'];?>" onClick="alert('Are you sure want to DELETE this data????');"><img src="images/icn_trash.png"></a>
                    </td> 
				</tr>
            
        <?php
        
        }
        
        ?>

			</tbody> 
			</table>

            
        <?php
        mysqli_close($con);
        ?>
			</div><!-- end of #tab2 -->
			
		</div><!-- end of .tab_container -->
		
		</article><!-- end of content manager article -->
			<?php
        
        $host="localhost";
        $username="root";
        $password="";
        $db_name="property";
        $tbl_name="message";
        
        $con = mysqli_connect("$host","$username","$password", "$db_name")or die("cannot connect");
        //mysql_select_db("$db_name")or die("cannot select DB");
        $sql="SELECT*FROM $tbl_name ORDER BY id_message DESC";
        $result=mysqli_query($con, $sql);
        ?>
		<article class="module width_quarter">
			<header><h3>Messages</h3></header>
			<div class="message_list">
				<div class="module_content">
                                    <?php
        while($row=mysqli_fetch_array ($result))
        {
        ?>

					<div class="message"><p><?php echo $row['message'];?> :</p>
					<p><strong><?php echo $row['name'];?></strong></p></div>
        <?php
        
        }
        
        ?>

				</div>
			</div>

			<footer>
        <?php
        mysqli_close($con);
        ?>

				<form class="post_message">
				</form>
			</footer>
		</article><!-- end of messages article -->
		
		<div class="clear"></div><!-- end of post new article --><!-- end of styles article -->
	  <div class="spacer"></div>
	</section>


</body>

</html>