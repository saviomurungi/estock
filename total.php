<?php
include "connection.inc.php";
if(isset($_POST['orderz'])){
$order = $_POST['orderz'];
if(!empty($order)){
	$quantity =  $_POST['quantity'];
	$brand = $_POST['brand'];
	$sql = "SELECT * FROM filledbottles WHERE quantites = '$quantity' AND brandid ='$brand'";
	$query = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($query)){
	$pricevalue = $row['pricevalue'];
	
}
if($quantity != null ){
	$tot = $pricevalue * $order;
?>
  <input type="text"class="form-control form-control-sm "   value="<? echo $tot; ?>" readonly="readonly" placeholder="total read only">

<?php
}
	
}
}
?>

