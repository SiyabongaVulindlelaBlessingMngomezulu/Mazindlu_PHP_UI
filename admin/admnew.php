<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SigarTech 2018</title>
</head>

<body>
<table border="0" style="border-style:double">
<form method="post" action="new_success.php">	<tr>
    	<td width="105">Book Title:</td>
        <td width="296"><input type="text" name="book_title" required> </td>
    	<td width="73">Format:</td>
        <td width="169"><select name="book_format" id="book_format" type="text" required/>
                    <option>....</option>
                    <option>Hardcopy</option>
                    <option>Softcopy</option>
                  </select></td>
    </tr>
    <tr>
    	<td>Author:</td>
        <td><input type="text" name="author" required></td>
    	<td>ISBN:</td>
        <td><input type="text" name="ISBN"></td>
    </tr>
    <tr>
    	<td>Price:</td>
        <td><input type="text" name="book_price" required></td>
		<td>Price Type:</td>
		<td><select name="price_type" id="price_type" type="text" required/>
        	<option>....</option>
            <option>Guide Price</option>
            <option>Negotiable</option>
            </select></td>
    </tr>
    <tr>
    <td>Edition:</td>
		<td><select name="edition" id="edition" type="text" required/>
        	<option>....</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
            <option>13</option>
            </select></td>
    </tr>
    <tr>
        <tr>
		<td>Contact Number:</td>
        <td><input type="text" name="contact_no" required></td></tr>
        <tr>
		<td>Publisher:</td>
        <td><input type="text" name="publisher" required></td></tr>
        <tr>
		<td>Publication date:</td>
		<td><input type="date" name="publication_date" required></td></tr>
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