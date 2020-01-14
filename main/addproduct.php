<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="saveproduct.php" method="post" onsubmit="return validate()">
<center><h4><i class="icon-plus-sign icon-large"></i> Add Product</h4></center>
<hr>
<div id="ac">
<!--<span>Brand Name : </span><input type="text" style="width:265px; height:30px;" name="code" Required><br>-->
<span>Brand Name : </span>
 <select type="text" style="width:265px; height:30px;" name="code" Required>
	  <option value="Don't select">Please select</option>
	  <option value="Samsung">Samsung</option>
	  <option value="LG">LG</option>
	  <option value="Butterfly">Butterfly</option>
	  <option value="Haier">Haier</option>
	  <option value="Panasonic">Panasonic</option>
	  <option value="Philips">Philips</option>
	  <option value="Sony">Sony</option>
	  <option value="Toshiba">Toshiba</option>
	  <option value="Sharp">Sharp</option>
	  <option value="Sanyo">Sanyo</option>
	  <option value="Whirlpool">Whirlpool</option>
	  <option value="General">General</option>
	  <option value="Vision">Vision</option>
	  <option value="Marcel">Marcel</option>
</select><br>
<span>Category  : </span>
<select type="text" style="width:265px; height:30px;" name="name" Required> 
	<option value="Don't select">Please select</option>
	 <option value="Television 14'">Television 14'</option>
	 <option value="Television 21'">Television 21'</option>
	 <option value="Television 29'">Television 29'</option>
	 <option value="Refrigerator">Refrigerator</option>
	 <option value="Fan">Fan</option>
	 <option value="Air-condition ">Air-condition </option>
</select><br>
<span>Received Date : </span><input type="date" style="width:265px; height:30px;" name="receive_date" placeholder="Year-Month-Day" Required/><br>
<span>Selling Price : </span><input type="text" id="txt1" style="width:265px; height:30px;" name="price"  Required><br>
<span>Original Price : </span><input type="text" id="txt2" style="width:265px; height:30px;" name="o_price" onkeyup="sum();" Required><br>
<span>Profit : </span><input type="text" id="txt3" style="width:265px; height:30px;" name="profit" readonly Required><br>
<span>Salesman : </span>
<select name="salesman"  style="width:265px; height:30px; margin-left:-5px;" Required>
<option></option>
	<?php
	include('../connect.php');
	$result = $db->prepare("SELECT * FROM salesman");
		$result->bindParam(':userid', $res);
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
		<option><?php echo $row['salesman_name']; ?></option>
	<?php
	}
	?>
</select><br>
<span>Quantity : </span><input type="number" style="width:265px; height:30px;" min="0" id="txt11" onkeyup="sum();" name="qty" Required ><br>
<span></span><input type="hidden" style="width:265px; height:30px;" id="txt22" name="qty_sold" Required ><br>
<div style="float:right; margin-right:10px;">
<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save</button>
</div>
</div>
</form>
