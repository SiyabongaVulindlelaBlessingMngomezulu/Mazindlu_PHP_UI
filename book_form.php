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

<?php include('admin/bookconnection.php'); ?>
 
<?php
$id_book = $_GET['id_book'];
$id_book_sql="SELECT * FROM book WHERE id_book='$id_book'";
$id_book_result=mysqli_query($db, $id_book_sql) or die(mysqli_error());

while($row_id_book=mysqli_fetch_array($id_book_result)){
$book_title=$row_id_book["book_title"];
$book_format=$row_id_book["book_format"];
$author=$row_id_book["author"];
$ISBN=$row_id_book["ISBN"];
$book_price=$row_id_book["book_price"];
$price_type=$row_id_book["price_type"];
$edition=$row_id_book["edition"];
$publisher=$row_id_book["publisher"];
$publication_date=$row_id_book["publication_date"];
$image=$row_id_book["book_title"];
$filename = "admin/images/$book_title.jpg";



if (!file_exists($filename)) {
$filename="images/default.png"; 
}
if ($image==null) {
$filename="images/$book_title.jpg"; 
}


print<<<HERE
<td align="center"><br><br>
<p align="center"><img src="$filename"  width="929" height="619"></p>
</td>
<td valign="top" class="text_menu">
<table width="277" border="0" cellspacing="0" cellpadding="0" class="text_menu">
  <tr>
    <td align="left" colspan="3">
<br>
    
    <table class="text_menu" width="289" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="95">Book Title :</td>
        <td width="188" class="highlight">$book_title</td>
      </tr>
      <tr>
        <td>Author :</td>
        <td><text class="highlight">$author</text>
		</td>
      </tr>
      <tr>
        <td>ISBN :</td>
        <td> <text class="highlight">$ISBN</text>
		</td>
      </tr>
      <tr>
        <td>Format:</td>
        <td><text class="highlight">$book_format</text>
		</td>
      </tr>
      <tr>
        <td>Price:</td>
        <td>R<text class="highlight">$book_price</text>
		</td>
      </tr>
      <tr>
        <td>Edition:</td>
        <td><text class="highlight">$edition</text>
		</td>
      </tr>
    </table></td>
  </tr>
<br><br>
</td></tr></table>
<br>
<u>Contact Student About this Book Listing:</u><br><br>
<hr>
      <form name="form1" method="post" action="book_form_success.php">
<table>
<tr><td>Name </td><td>:<input type="text" name="name" required></td></td></tr>
<tr><td>No.Phone </td><td>:<input type="text" name="mobile_phone" required></td></td></tr>
<tr><td>Email </td><td>:<input type="text" name="cus_email" required></td></td></tr>
<tr><td>Date </td><td>:<input type="date" name="date" required></td></td></tr>
<tr><td>Reason </td><td>:<textarea name="reason" width="333"></textarea></td></td></tr>
</table>
<input type="hidden" name="id_book" value="$id_book">
<p align="left"><input type="submit" name="submit" value="submit" /></p>
</form>
 <hr>
 	

</td>
<br>
</table>

HERE;

}
 ?>