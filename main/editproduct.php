<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM products WHERE product_id= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="saveeditproduct.php" method="post">
<center><h4><i class="icon-edit icon-large"></i> Edit Product</h4></center>
<hr>
<div id="ac">
<input type="hidden" name="memi" value="<?php echo $id; ?>" />
<span>Brand Name : </span>
	<select style="width:265px; height:30px;" name="code">
		<option value="Don't Select " <?php  if($_GET['code']=='Dont Select') echo "selected"; ?>>Please select</option>
		<option value="Samsung" <?php if($_GET['code']=='Samsung') echo "selected";?>>Samsung</option>
		<option value="LG" <?php  if($_GET['code']=='LG') echo "selected";?>>LG</option>
		<option value="Butterfly" <?php if($_GET['code']=='Butterfly') echo "selected";?>>Butterfly</option>
		<option value="Haier" <?php if($_GET['code']=='Haier') echo "selected";?>>Haier</option>
		<option value="Panasonic" <?php if($_GET['code']=='Panasonic') echo "selected";?>>Panasonic</option>
		<option value="Philips" <?php if($_GET['code']=='Philips') echo "selected";?>>Philips</option>
		<option value="Sony" <?php if($_GET['code']=='Sony') echo "selected";?>>Sony</option>
		<option value="Toshiba" <?php if($_GET['code']=='Toshiba') echo "selected";?>>Toshiba</option>
		<option value="Sharp" <?php if($_GET['code']=='Sharp') echo "selected";?>>Sharp</option>
		<option value="Sanyo" <?php if($_GET['code']=='Sanyo') echo "selected";?>>Sanyo</option>
		<option value="Whirlpool" <?php if($_GET['code']=='Whirlpool') echo "selected";?>>Whirlpool</option>
		<option value="General" <?php if($_GET['code']=='General') echo "selected";?>>General</option>
		<option value="Vision" <?php if($_GET['code']=='Vision') echo "selected";?>>Vision</option>
		<option value="Marcel" <?php if($_GET['code']=='Marcel') echo "selected";?>>Marcel</option>
	</select>
<br>
<span>Category  : </span>
<!--<textarea style="width:265px; height:30px;" name="name" ><?php echo $row['pro_band_name']; ?> </textarea>-->
	<select style="width:265px; height:30px;" name="name" >
		<option value="Don't Select " <?php if($_GET['name']=='Dont Select') echo "selected";?>>Please select</option>
		<option value="Television 14" <?php if($_GET['name']=='Television 14') echo "selected";?>>Television 14'</option>
		<option value="Television 21" <?php if($_GET['name']=='Television 21') echo "selected";?>>Television 21'</option>
		<option value="Television 29" <?php if($_GET['name']=='Television 29') echo "selected";?>>Television 29'</option>
		<option value="Refrigerator" <?php if($_GET['name']=='Refrigerator') echo "selected";?>>Refrigerator</option>
		<option value="Fan" <?php if($_GET['name']=='Fan') echo "selected";?>>Fan</option>
		<option value="Air-condition" <?php if($_GET['name']=='Air-condition') echo "selected";?>>Air-condition</option>
	</select>
<br>
<span>Date Arrival: </span><input type	="date" style="width:265px; height:30px;" name="receive_date" value="<?php echo $row['receive_date']; ?>" /><br>
<span>Selling Price : </span><input type="text" style="width:265px; height:30px;" id="txt1" name="price" value="<?php echo $row['price']; ?>" onkeyup="sum();" Required/><br>
<span>Original Price : </span><input type="text" style="width:265px; height:30px;" id="txt2" name="o_price" value="<?php echo $row['o_price']; ?>" onkeyup="sum();" Required/><br>
<span>Profit : </span><input type="text" style="width:265px; height:30px;" id="txt3" name="profit" value="<?php echo $row['profit']; ?>" readonly><br>
<span>Salesman : </span>
<select name="salesman" style="width:265px; height:30px; margin-left:-5px;" >
	<option><?php echo $row['salesman']; ?></option>
	<?php
	$results = $db->prepare("SELECT * FROM salesman");
		$results->bindParam(':userid', $res);
		$results->execute();
		for($i=0; $rows = $results->fetch(); $i++){
	?>
		<option><?php echo $rows['salesman_name']; ?></option>
	<?php
	}
	?>
</select><br>
<span>QTY Left: </span><input type="number" style="width:265px; height:30px;" min="0" name="qty" value="<?php echo $row['qty']; ?>" readonly /><br>
<span>Quantity: </span><input type="number" style="width:265px; height:30px;" min="0" name="sold" value="<?php echo $row['qty_sold']; ?>" /><br>

<div style="float:right; margin-right:10px;">

<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save Changes</button>
</div>
</div>
</form>
<?php
}
?>