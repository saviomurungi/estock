<h3 class="text-center ">stock available</h3>
<table class="table table-border table-condensed table-stripped table-hover mt-5">
	<tbody>

<tr class="card-header">

	<th scope="col">mills</th>
	<th scope="col">brand</th>
	<th scope="col">stock</th>
	<th scope="col"> amount(shs)</th>
</tr>
<?php
if(isset($_POST['value'])){
	$date = $_POST['value'];
	include 'connection.inc.php';

	$query = mysqli_query($conn,"SELECT * FROM total_stock_table_daily WHERE date = '$date' ");
	while($row = mysqli_fetch_array($query)){
		$bottle = $row['bottle'];
		$stock_amount = $row['amount'];
		$stock_total = $row['total'];


$sql2 ="SELECT * FROM filledbottles WHERE id = '$bottle'";
$query2 = mysqli_query($conn,$sql2);
while($rw = mysqli_fetch_array($query2)){
	$brandid = $rw['brandid'];
	$qtyId = $rw['quantites'];
$s="SELECT mills FROM quantites WHERE quantityid = '$qtyId' ";
$rs = mysqli_query($conn,$s);
while($r=mysqli_fetch_array($rs)){
	$qty=$r['mills'];
}
$qb = "SELECT brandname FROM brand WHERE brandid = '$brandid'";
$q = mysqli_query($conn,$qb);
while($w = mysqli_fetch_array($q)){
	$brandname = $w['brandname'];
}

}
?>



	<tr>
		<td><?php echo $qty; ?> </td>
		<td><?php echo $brandname; ?> </td>
		<td><?php echo $stock_amount; ?> </td>
		<td><?php echo $stock_total; ?> </td>
	</tr>



<?php

	}
}
?>
	</tbody>
</table>