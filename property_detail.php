      
      <table width="275" border="0" cellspacing="0" cellpadding="0" style="float:left;">
        <tr>
          <td align="center"><?php include('admin/connection.php'); ?>
 
<?php
$get_id_property=mysqli_real_escape_string($db, $_POST['post_item']);
$id_property_sql="SELECT * FROM property WHERE id_property='$get_id_property'";
$id_property_result=mysqli_query($db, $id_property_sql) or die(mysqli_error());

$id_pro = $_POST['post_item'];


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
  
    <table class="text_menu" width="289" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="95">Property:</td>
        <td width="188" class="highlight">$name_property</td>
      </tr>
      <tr>
        <td>Address :</td>
        <td>R<text class="highlight">$address</text>
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

    </table></td>
  </tr>
<br><br>
</td></tr></table>
<br>
<u>Description:</u><br><br>
<hr>
<textarea class="text_menu" style="width:300px; height:300px; background:transparent;border:0; resize:none" readonly>
Type Property : $type_property
Bedrooms : $beds
Bathroom:$baths 
Agent's contact: $contact_no
Description:$text

 </textarea>
 <hr>
 	<p align="left"><input type="button" name="back" value="Back"
onClick="location.href='property_listing.php'" /><input type="button" name="Form" value="Contact Agent"
onClick="location.href='property_form.php?id_property=$id_pro'" /><input type="hidden" value="$id_pro"></p>

</td>
<br>
</table>

HERE;

}
 ?></td>
      </table>
