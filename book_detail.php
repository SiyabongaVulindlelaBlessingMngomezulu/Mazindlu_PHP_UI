      <table width="275" border="0" cellspacing="0" cellpadding="0" style="float:left;">
        <tr>
          <td align="center"><?php include('admin/bookconnection.php'); ?>
 
<?php
$get_id_book=mysqli_real_escape_string($db, $_POST['post_item']);
$id_book_sql="SELECT * FROM book WHERE id_book='$get_id_book'";
$id_book_result=mysqli_query($db, $id_book_sql) or die(mysqli_error());

$id_pro = $_POST['post_item'];


while($row_id_book=mysqli_fetch_array($id_book_result)){
$book_title=$row_id_book["book_title"];
$book_format=$row_id_book["book_format"];
$author=$row_id_book["author"];
$ISBN=$row_id_book["ISBN"];
$book_price=$row_id_book["book_price"];
$price_type=$row_id_book["price_type"];
$edition=$row_id_book["edition"];
$contact_no=$row_id_book["contact_no"];
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
        <td>ISBN:</td>
        <td><text class="highlight">$ISBN</text>
		</td>
      <tr>
        <td>Format :</td>
        <td> <text class="highlight">$book_format</text>
		</td>
      </tr>
      <tr>
        <td>Price:</td>
        <td>R<text class="highlight">$book_price</text>
    </td>
    </table></td>
  </tr>
<br><br>
</td></tr></table>
<br>
<u>Description:</u><br><br>
<hr>
<textarea class="text_menu" style="width:300px; height:300px; background:transparent;border:0; resize:none" readonly>
Price Type : $price_type
Format : $book_format
Edition : $edition
Publisher : $publisher
Publication Date : $publication_date
Seller's number: $contact_no


 </textarea>
 <hr>
 	<p align="left"><input type="button" name="back" value="Back"
onClick="location.href='book_listing.php'" /><input type="button" name="Form" value="Contact seller"
onClick="location.href='book_form.php?id_book=$id_pro'" /><input type="hidden" value="$id_pro"></p>

</td>
<br>
</table>

HERE;

}
 ?></td>
      </table>
