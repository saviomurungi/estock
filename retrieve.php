<?php
include "connection.inc.php";
$sq = "SELECT * FROM ccbadelivery ORDER BY count DESC";
static $var =0;
$query = mysqli_query($conn,$sq);
while($row=mysqli_fetch_array($query)){
	$bottle = $row['bottle'];
	$date = $row['date'];
	$total =$row['total'];
	$delivery = $row['ccbdelivery'];
	$var++;

$sql ="SELECT * FROM filledbottles WHERE id = '$bottle'";
$query2 = mysqli_query($conn,$sql);
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
	<td><?php echo $date; ?></td>
	<td><?php echo $qty; ?></td>
	<td><?php echo $brandname; ?></td>
	<td><?php echo $delivery; ?></td>
	<td><?php echo $total;?></td>
	<td><a href="Edit.php?edit=<?php echo $date;?>" class=" btn btn-sm btn-secondary btn-elegant">Edit</a></td>
	<!--<td><a href="delete.php?rec=<?php echo $date; ?>" class="btn btn-sm btn-danger ">Delete</a></td>-->
</tr>

<?php
}

?>
<script>
	$(document).ready(function(){
		$("#history").click(function(){
			$("#t1").toggle();});
		});
</script>
