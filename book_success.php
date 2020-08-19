<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>SigarTech 2018</title>
<link href="style.css" rel="stylesheet" type="text/css">

<script type="text/javascript">
function ctck()
{
var sds = document.getElementById("dum");
if(sds == null){alert("You are using a free package.\n You are not allowed to remove the tag.\n");}
}
</script> 

</head>

<body>
<a class="navbar-brand" href="index.html"><img src="imag/logo.jpg" alt=""></a>
<div id="navigation">
<ul>
<center>
              <li><a href="index.html">HOME</a></li>
              <li><a href="property_listing.php">PROPERTY LISTINGS</a></li>
              <li><a href="book_listing.php">BOOK LISTINGS</a></li>
              <li><a href="about.php">ABOUT US </a></li>
              <li><a href="contact.php">CONTACT US </a></li>
              <li><a href="admin/user_login.php">LOGIN </a></li>
</center>

</ul>
</div>
<div id="content"><table width="928" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
    <div id="content_top">
    <div id="main_content">
    <h1>Books For Sale</h1>
    <h3>Our Bestselling Book Collection.</h3>
    <br>
    <p>
</p>
    <div id="book_sales">
      <table width="275" border="0" cellspacing="0" cellpadding="0" style="float:left;">
        <tr>
          <td align="center"><?php include('admin/connection.php'); ?>
 
        <?php 
		$search = isset($_POST['search']) ? $_POST['search'] : null;
$sql_search="SELECT *
FROM book WHERE book_title like '%$search%' OR author like '%$search%' OR publisher like '%$search%'";
$search_result = mysqli_query($db, $sql_search) or die(mysqli_error());
 
$i=0;
$items=mysqli_num_rows($search_result);
while(($data=mysqli_fetch_array($search_result))&&($i<$items)){
$id_book=$data["id_book"];
$book_title=$data["book_title"];
$author=$data["author"];
$publisher=$data["publisher"];
$book_price=$data["book_price"];
$image=$data["book_title"];
$filename = "admin/images/$book_title.jpg";

if (!file_exists($filename)) {
$filename="images/default.png"; 
}
if ($image==null) {
$filename="images/$book_title.jpg"; 
}

if($i%5==0){
print "<tr>";	
} 

print<<<HERE


<td class="text_menu"><strong>
<p align="center">
<p align="left">[ ID:MO<text class="highlight">$id_book</text> ]</p>
<form method="post" action="item_details.php">
<input type="hidden" name="post_item" value="$id_book">
<input type="image" src="$filename"  height="139" width="136">
</form>
<br><br>
Book Title: <br>
<text class="highlight">$book_title</text></br>
RM <text class="highlight">$book_price</text></p>
<table width="150"><tr><td>
<input type="button" name="back" value="Back"
onClick="location.href='book_listing.php'" />
</td>
<td>
<input type="button" name="Form" value="Form"
onClick="location.href='book_form.php?id_book=$id_book'" /><input type="hidden" value="$id_book">
</td></tr></table>
</td>




HERE;
//end table
$i++;
if($i%5==0){
print "</tr>";	
}

   }
     
 ?>
</td>
      </table>
    </div>
    </div>
    <div id="find">
    <h2>Find a Book</h2>
    <h3>Lots of books available.</h3>
    <form name="form1" method="post" action="book_success.php">
    <table width="265" border="0" cellpadding="2" cellspacing="0" class="black">
  <tr>
    <td>Book title</td>
    <td>:</td>
    <td><input name="name" type="text" width="333" required></td>
  </tr>
  <tr>
    <td>Author:</td>
    <td>:</td>
    <td><input name="name" type="text" width="333" required></td>
  </tr>
  <tr>
    <td>Publisher:</td>
    <td>:</td>
    <td><input name="name" type="text" width="333" required></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
      <input name="button" type="submit" class="find" id="button" value="">    </td>
  </tr>
</table>
</form>
    </div>
    </div>
    <div id="find">
      <h2>Leave Your Message</h2>
      <h3>Let Us know. </h3>
      <form name="form1" method="post" action="message_success.php">
        <table width="402" border="0" cellpadding="2" cellspacing="0" class="black">
          <tr>
            <td width="55">Reason </td>
            <td width="3">:</td>
            <td width="332"><select name="reason" type="text" width="333">
        				<option>I am looking to buy a book</option>
                        <option>I have another enquiry</option>
                        </select></td>
          </tr>
          <tr>
            <td>Name :</td>
            <td>:</td>
            <td><input name="name" type="text" width="333"></td>
          </tr>
          <tr>
            <td>Contact :</td>
            <td>:</td>
            <td><input name="no_fon" type="text" width="333"></td>
          </tr>
          <tr>
            <td>Email :</td>
            <td>:</td>
            <td><input name="email" type="text" width="333"></td>
          </tr>
          <tr>
            <td>Message </td>
            <td>:</td>
            <td><textarea name="message" width="333"></textarea></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input name="button" type="submit"></td>
          </tr>
        </table>
      </form>
    </div>
    <div id="content_bottom">
      <table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><div class="features">
            <h4 style="background:url(images/services.jpg) left center no-repeat;">Profile</h4>
            <h3 style="padding-left:25px;">About me </h3>
            <table width="360" border="0">
              <tr>
                <td width="154"><img src="admin/images/aaaassss.jpg" alt="" width="149" height="155"></td>
                <td width="190"><p>Siyabonga Mngomezulu</p>
                  <p>Project administrator</p>
                  <p>+27 63135 3336</p>
                  <p>sigartech0@gmail.com</p>
                  <p>www.sigartech.co.za</p>
                  <p>&nbsp;</p></td>
          </tr>
          </table>
            
          </div></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table>
</div>
<div id="fotter">
    <div class="design_info" id="footer">Designed by <a id="dum" href="http://www.sigartech.co.za/">www.sigartech.co.za</a>
	<script type="text/javascript">
	document.onload = ctck();
	</script>
	</div>
    <div class="copyrights">Copyright © SigarTech 2018. All Rights Reserved.</div>
</div>
</body>
</html>