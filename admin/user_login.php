<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SigarTech 2018</title>
<!--sa poip up-->
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>

  <!--sa validate from-->
<script type="text/javascript">
function validateForm()
{

var y=document.forms["login"]["user"].value;
var a=document.forms["login"]["password"].value;
if ((y==null || y==""))
  {
  alert("you must enter your username");
  return false;
  }
  if ((a==null || a==""))
  {
  alert("you must enter your password");
  return false;
  }
 

}
</script>

</head>

<body>
  
<div style="width:300px; margin:0 auto; position:relative; border:3px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px;">
  <form id="form1" name="login" method="post" action="user_login_success.php">
  <table width="286" align="center">
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td width="92"><div align="right">Username: </div></td>
    <td width="178"><input type="text" name="user_username" required/></td>
  </tr>
  <tr>
    <td><div align="right">Password: </div></td>
    <td>
      <input type="password" name="user_password" required/>
    </td>
  </tr>
  <tr>
    <td><div align="right"></div></td>
    <!--<td><a rel="facebox" href="recover.php">Forgot Password?</a></td>-->
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
      <input type="submit" name="Submit" value="Login" />
      <input type="reset" name="reset" value="Clear" />
      <br>
      <br>
      Go back <a href="../index.html">Home</a></span>
     <p> New user? Sign up <a href="../signUpForm.php">Here</a></span> </p>

    </td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
    
  </form>
  

</div>
</body>
</html>
