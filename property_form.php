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
<?php include('admin/connection.php'); ?>
 
<?php
$id_property = $_GET['id_property'];
$id_property_sql="SELECT * FROM property WHERE id_property='$id_property'";
$id_property_result=mysqli_query($db, $id_property_sql) or die(mysqli_error());

while($row_id_property=mysqli_fetch_array($id_property_result)){
  $name_property=$row_id_property["name_property"];
  $type_property=$row_id_property["type_property"];
  $address=$row_id_property["address"];
  $post_code=$row_id_property["post_code"];
  $price=$row_id_property["price"];
  $price_type=$row_id_property["price_type"];
  $leasehold=$row_id_property["leasehold"];
  $beds=$row_id_property["beds"];
  $baths=$row_id_property["baths"];
  $contact_no=$row_id_property["contact_no"];
  $text=$row_id_property["text"];
$image=$row_id_property["name_property"];
$filename = "admin/images/$name_property.jpg";



if (!file_exists($filename)) {
$filename="images/default.png"; 
}
if ($image==null) {
$filename="images/$name_property.jpg"; 
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
<br>
    
    <table class="text_menu" width="289" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="95">Property:</td>
        <td width="188" class="highlight">$name_property</td>
      </tr>
      <tr>
        <td>Address :</td>
        <td><text class="highlight">$address</text>
		</td>
      </tr>
      <tr>
      <td width="95">Post Code:</td>
      <td width="188" class="highlight">$post_code</td>
    </tr>
    <tr>
    <td width="95">Price:</td>
    <td width="188" class="highlight">R$price</td>
  </tr>
  <tr>
  <td width="95">Price type:</td>
  <td width="188" class="highlight">$price_type</td>
</tr>
<tr>
<td width="95">Agents No:</td>
<td width="188" class="highlight">$contact_no</td>
</tr>

    </table></td>
  </tr>
<br><br>
</td></tr></table>
<br>
<u>Contact Agent About this Listing:</u><br><br>
<hr>
      <form name="form1" method="post" action="property_form_success.php">
<table>
<tr><td>Name </td><td>:<input type="text" name="name" required></td></td></tr>
<tr><td>No.Phone </td><td>:<input type="text" name="mobile_phone" required></td></td></tr>
<tr><td>Email </td><td>:<input type="text" name="cus_email" required></td></td></tr>
<tr><td>Date </td><td>:<input type="date" name="date" required></td></td></tr>
<tr><td>Reason </td><td>:<textarea name="reason" width="333"></textarea></td></td></tr>
</table>
<input type="hidden" name="id_property" value="$id_property">
<p align="left"><input type="submit" name="submit" value="submit" /></p>
</form>
 <hr>
 	

</td>
<br>
</table>

HERE;

}
 ?>