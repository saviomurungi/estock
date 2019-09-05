<?php
include "connection.inc.php";
if(isset($_POST['record'])){
	$quantity = $_POST['quantity'];
	$brand = $_POST['brand'];
	$delivery = $_POST['deliveries'];
	 //$q = mysqli_real_escape_string($quantity);

	$sql = "SELECT * FROM  filledbottles WHERE brandid='$brand' AND quantites = '$quantity'";
	$query = mysqli_query($conn,$sql);
	while($dt = mysqli_fetch_array($query)){
		$id = $dt['id'];
		$price = $dt['pricevalue'];
		$total = $price * $delivery;

	$d = date("Y-m-d");
	$sq = "INSERT INTO ccbadelivery (count, bottle, date, ccbdelivery, total, empty) VALUES (NULL, '$id', '$d', '$delivery', '$total', NULL)";
	$query2 = mysqli_query($conn,$sq);
	if($query2){
?>
	<script type="text/javascript">
		window.reload();
		document.ccbaDelivery.resset();
	</script>
<?php
	}else{
?>
	<script type="text/javascript">
		alert("failure");
	</script>
<?php
	}
 }
}
?>
