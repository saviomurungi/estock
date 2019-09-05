<?php
include "system.php";
if(isset($_POST['quantity'])){
	$mls = $_POST['quantity'];
	$brand = $_POST['brand'];
	$order =$_POST['order'];
	$client =$_POST['client'];
	$date = date("Y-m-d");
	$sql = "SELECT * FROM filledbottles WHERE quantites = '$mls' AND brandid ='$brand'";
	$query = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($query)){
	$pricevalue = $row['pricevalue'];	
}
if($quantity != null ){
	$tot = $pricevalue * $order;
}
$elm = new record($date,$brand,$pricevalue,$mls,$tot,$order,$client);
?>
	<tr>
		<td><?php echo $elm->quantiy; ?></td>
		<td><?php echo $elm->brand; ?></td>
		<td><?php echo $elm->price; ?></td>
		<td><?php echo $elm->total; ?></td>
		<td><?php echo $elm->order ; ?></td>
		<td><?php echo $elm->customer; ?></td>
	</tr>
<?php
			
}

?>