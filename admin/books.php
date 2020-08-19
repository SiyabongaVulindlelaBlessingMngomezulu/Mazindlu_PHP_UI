<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SigarTech 2018</title>
</head>

<body>
<table border="0" style="border-style:double">
<form method="post" action="book_success.php">	<tr>
    	<td width="105">Book Title:</td>
        <td width="296"><input type="text" name="book_title" required></td>
    	<td width="73">Book format:</td>
        <td width="169"><select name="book_format" id="book" type="text" required/>
                    <option>...</option>
                    <option>Hardback</option>
                    <option>Softcopy</option>
                  </select></td>
    </tr>
    <tr>
    	<td>Author:</td>
        <td><input type="text" name="author" required></td>
    	<td>ISBN:</td>
        <td><input type="number" name="ISBN" required></td>
    </tr>
    <tr>
    	<td>Price:</td>
        <td><input type="text" name="book_price" required></td>
		<td>Price Type:</td>
		<td><select name="price_type" id="book" type="text" required/>
        	<option>....</option>
            <option>Non Negotiable</option>
            <option>Negotiable</option>
            </select></td>
    </tr>
    
    <tr>
        <tr>
		<td>Edition:</td>
		<td><select type="number" name="edition" required>
        	<option></option>
            <option>7</option>
            <option>8</option>
        	<option>9</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
        </select></td>

        </SELECT></td>
    </tr>
    <tr>
        <tr>
		<td>Contact Number:</td>
		<td><input type="number" name="contact_no" required></td></tr>
        <tr>
		<td>Publisher:</td>
		<td><input type="text" name="publisher" required></td>
    </tr>
            <tr>
		<td>Publication date:</td>
		<td><input type="date" name="publication_date" required></td>
    </tr>
        <tr>
		<td height="103">Short Description:</td>
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