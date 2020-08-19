<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SigarTech 2018</title>
</head>

<body>
<table border="0" style="border-style:double">
<form method="post" action="user_new_success.php">	<tr>
    	<td width="105">Property Name :</td>
        <td width="296"><input type="text" name="name_property" required> </td>
    	<td width="73">Property Type:</td>
        <td width="169"><select name="type_property" id="type_property" type="text" required/>
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
    <td width="105">Address:</td>
        <td width="296"><input type="text" name="address" required> </td>
        <td width="105">Post Code:</td>
        <td width="296"><input type="text" name="post_code" required> </td>
    </tr>
    <tr>
    	<td>Price:</td>
        <td><input type="text" name="price" required></td>
		<td>Price Type:</td>
		<td><select name="price_type" id="price_type" type="text" required/>
        	<option>....</option>
            <option>Guide Price</option>
            <option>Negotiable</option>
            </select></td>
    </tr>
    <tr>
    	<td>Leasehold:</td>
        <td><input type="text" name="leasehold" required></td>
		<td>Beds:</td>
		<td><select name="beds" id="beds" type="text" required/>
        	<option>....</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            </select></td>
    </tr>
    <tr>
		<td>Bathrooms:</td>
		<td><select name="baths" id="baths" type="text" required/>
        	<option>....</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            </select></td>
    </tr>
    <tr>
		<td>Contact no:</td>
		<td><input type="text" name="contact_no" required></td></tr>
        <tr>
		<td height="103">Brief description:</td>
		<td><label for="textarea"></label>
		  <textarea name="text" id="textarea" cols="45" rows="5"></textarea></td>
    </tr>
	<tr>
    <td>&nbsp;</td>
        <td><input type="submit" name="submit" value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Reset"></td>
    </tr>
    
</form>
</table>


</body>
</html>