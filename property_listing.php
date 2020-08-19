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
      <br>
    <h1>Houses For Rent </h1>
    <h3>New Houses for rent.</h3>
    <br>
    <p>
</p>
    <div id="house_sales">
      <table width="275" border="0" cellspacing="0" cellpadding="0" style="float:left;">
        <tr>
          <td align="center"><?php include('admin/connection.php'); ?>
 
        <?php  
$sql="SELECT * FROM property ORDER BY id_property DESC";
$result=mysqli_query($db, $sql) or die("Cannot execute sql.");

$i=0;
$items=mysqli_num_rows($result);
while(($data=mysqli_fetch_array($result))&&($i<$items)){
$id_property=$data["id_property"];
$name_property=$data["name_property"];
$price=$data["price"];
$image=$data["name_property"];
$filename = "admin/images/$name_property.jpg";


if (!file_exists($filename)) {
$filename="images/default.png"; 
}
if ($image==null) {
$filename="images/$name_property.jpg"; 
}
if($i%3==0){
print "<tr>";	
} 


print<<<HERE
<td>
<table>
<tr>
<td>
<td class="text_menu"><strong>
<p align="center">
<table width="150"><tr><td>
</td></tr></table><div align="center">
<form method="post" action="property_detail.php?id_property=$id_property">
<input type="hidden" name="post_item" value="$id_property">
<input type="image" src="$filename"  height="139" width="136">
</form>
</div>
<p align="left" class="code_text">CODE: <text class="highlight_num">M0$id_property</text></p>
<text class="price_text">$name_property <br> </text>
<text class="price_text">R $price</text></p>
</strong>
</td>
</td>
</tr>
</table>
</td>
HERE;

$i++;
if($i%3==0){
print "</tr>";	

}
}


   
     
 ?></td>
      </table>
    </div>
    </div>
    <div id="find">
    <h2>Find Your House</h2>
    <h3>Lots of properties available.</h3>
    <form name="form1" method="post" action="property_success.php">
    <table width="265" border="0" cellpadding="2" cellspacing="0" class="black">
  <tr>
    <td>Type of Property </td>
    <td>:</td>
    <td><select name="search" id="select">
                    <option>......</option>
                    <option>Condominium</option>
                    <option>Terraced House</option>
                    <option>Shop / Office</option>
                    <option>Bungalow House</option>
                    <option>Hotel / Resort</option>
                    <option>Semi-Detached House</option>
                    <option>Penthouse</option>
      </select></td>
  </tr>
  <tr>
    <td>Beds :</td>
    <td>:</td>
    <td><select name="search" id="select">
      <option>...</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
      <option>7</option>
      <option>8</option>
      <option>9</option>
      </select></td>
  </tr>
  <tr>
    <td>Baths :</td>
    <td>:</td>
    <td><select name="search" id="select">
      <option>...</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
      <option>7</option>
      <option>8</option>
      <option>9</option>
        </select></td>
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
      <h3>Let Us know </h3>
      <form name="form1" method="post" action="message_success.php">
        <table width="402" border="0" cellpadding="2" cellspacing="0" class="black">
          <tr>
            <td width="55">Reason </td>
            <td width="3">:</td>
            <td width="332"><select name="reason" type="text" width="333">
                  <option>I am looking to rent a Property</option>
        				  <option>I am looking to let a Property</option>
                  <option>I have another enquiry</option>
                  </select></td>
          </tr>
          <tr>
            <td>Name :</td>
            <td>:</td>
            <td><input name="name" type="text" width="333" required></td>
          </tr>
          <tr>
            <td>Contact :</td>
            <td>:</td>
            <td><input name="no_fon" type="tel" width="333" required></td>
          </tr>
          <tr>
            <td>Email :</td>
            <td>:</td>
            <td><input name="email" type="text" width="333" required></td>
          </tr>
          <tr>
            <td>Message </td>
            <td>:</td>
            <td><textarea name="message" width="333" required></textarea></td>
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
    </div>
    </td>
  </tr>
</table>
</div>

<br>
<br>
<br>
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