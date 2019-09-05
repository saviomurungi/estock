<?php
include "connection.inc.php";
$query = mysqli_query($conn,"SELECT * FROM dailyrecord ORDER BY count DESC");
while($row = mysqli_fetch_array($query)){
	$count = $row['count'];
	$date = $row['date'];
	$bottle = $row['bottle'];
	$order = $row['clientorder'];
	$total = $row['total'];
	$client = $row['client'];
	$deb = $row['dept'];
	$dbc = mysqli_query($conn,"SELECT MarkName FROM marketeer WHERE id = '$client'");
	$extract = mysqli_fetch_array($dbc);
	$Markname = $extract['MarkName'];
	
$query2 = mysqli_query($conn,"SELECT * FROM filledbottles WHERE id='$bottle'");
while($dt = mysqli_fetch_array($query2)){
	$brandid = $dt['brandid'];
	$price  =$dt['pricevalue'];
	
	$qty = $dt['quantites'];
	
$q1 = mysqli_query($conn,"SELECT brandname FROM brand WHERE brandid='$brandid'");
$q2 = mysqli_query($conn,"SELECT mills FROM quantites WHERE quantityid='$qty'");
while($d = mysqli_fetch_array($q1)){
	$bname = $d['brandname'];	
}
while($r = mysqli_fetch_array($q2)){
	$v = $r['mills'];
}

}
	
?>
<tr <?php if($deb == "1"){
	echo "class='bg-danger' title='not yet cleared'";
	}?> >
	

	<td>
		<?php echo $v;?>
	</td>
	<td>
		<?php echo $bname; ?>
	</td>
	<td>
		<?phpecho $price;?>
	</td>
	<td>
		<?php echo $order; ?>
	</td>
	<td>
		<?php echo $total;?>
	</td>
	<td>
		<?php echo $Markname;?>
	</td>
	<td>
		<?php echo $date;?>
	</td>
	<td>
		<a href="changerecord.php?change=<?php echo $count; ?>" class="btn btn-elegant btn-sm" >Edit</a>
	</td>
	<?php if($deb ==1){?>
	<td>
		<a  class="btn btn-elegant btn-sm" href="cleardebt.php?clear=<?php echo $count; ?>">clear</a>
	</td>
	<?php }?>
</tr>

<?php	
	
}

?>