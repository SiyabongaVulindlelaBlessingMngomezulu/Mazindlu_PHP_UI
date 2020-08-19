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
<a class="navbar-brand" href="index.html"><img src="imag/logo.jpg" alt="" class="center"></a>
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
    <h1>Contact Successfull</h1>
    <h3>We appieciate for your contact</h3>
    <h3><?php
$host="localhost";
$username="root";
$password="";
$db_name="property";
$tbl_name="feedback";

$con = mysqli_connect("$host","$username","$password", "$db_name")or die("cannot connect");
//mysql_select_db("$db_name")or die("cannot select DB");

$reason = $_POST['reason'];
$planning = $_POST['planning'];
$name = $_POST ['name'];
$no_phone = $_POST['no_phone'];
$email = $_POST['email'];
$question = $_POST['question'];

$sql = "INSERT INTO $tbl_name(reason, planning, name, no_phone, email,  question) VALUE('$reason', '$planning', '$name',  '$no_phone', '$email', '$question')";

$result = mysqli_query($con, $sql);


if($result)
{
echo "<p><center>";
echo "";
echo "<br>";
//echo "<a href='index.php'><img src='images/success.ico'></a>";
}
else
{
echo "Error";
echo mysqli_error($con);
}
?></p>
    <div id="house_sales">
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
      <h3>Let Us know </h3>
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