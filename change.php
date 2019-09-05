<?php
if(isset($_POST['editrec'])){
	$mills = $_POST['milligrams'];
	$brand = $_POST['brand'];
	$ord = $_POST['order'];
	$salesman =  $_POST['salesman'];
	
	$sql= "SELECT * FROM filledbottles WHERE brandid='$brand' AND quantites='$mills' ";
	$query2 = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($query2)){
		$id = $row['id'];
		$price =$row['pricevalue'];
		$total = $price * $ord;
		
		echo $id;
		echo $total;
		echo $ord;
		echo $salesman;
	}
	
$var = mysqli_query($conn,"UPDATE dailyrecord SET bottle='$id',clientorder='$ord',client='$salesman',total='$total' WHERE count ='$val'");
if($var){
	header('Location:client_order.php');
	?>
<script type="text/javascript">
	window.open("client_order.php","_self");
</script>
<?php
}
else{
?>
<script type="text/javascript">
	alert("failed");
</script>
<?php
}
}
?>

