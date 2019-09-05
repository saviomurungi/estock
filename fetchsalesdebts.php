<?php
if(isset($_POST['cli'])){
	$cli = $_POST['cli'];
include "connection.inc.php";
$query = mysqli_query($conn,"SELECT * FROM dailyrecord WHERE dept='1' AND client='$cli' ");
while($row = mysqli_fetch_array($query)){
	$count = $row['count'];
	$date = $row['date'];
	$bottle = $row['bottle'];
	$order = $row['clientorder'];
	$total = $row['total'];


$sq ="SELECT * FROM filledbottles WHERE id = '$bottle'";
$query2 = mysqli_query($conn,$sq);
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
	<td><?php echo $qty; ?></td>
	<td><?php echo $brandname; ?></td>
	<td><?php echo $order; ?></td>
	<td><?php echo $total; ?></td>
	<td>
		<a href="remdebt.php?clear=<?php echo $count; ?>" class="btn btn-sm btn-elegant  close" onclick="foo()"    >clear</a>
	</td>
</tr>

<?php  
 }
}
?>