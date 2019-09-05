<?php
//mills control select option
include "connection.inc.php";
$sql = "SELECT * FROM quantites";
$result = mysqli_query($conn,$sql);
while($data = mysqli_fetch_array($result)){
	$qtyId = $data['quantityid'];
	$qtyValue = $data['mills'];
?>
	<option value="<?php echo $qtyId;?>"><?php echo $qtyValue; ?></option>
<?php	
}
//incude on the mills select option
?>