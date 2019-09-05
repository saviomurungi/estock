<?php

if(isset($_POST['clientrecord']))
{
	$quantity = $_POST['mils'];
	$brand = $_POST['brand'];
	$order = $_POST['order'];
	$customer =$_POST['customer'];
	
	if(isset($_POST['debt'])){
		$deb = $_POST['debt'];
	}
	else{
		$deb = 0;
	}
	
	$d = date("Y-m-d");
	include "connection.inc.php";
	$sql= "SELECT * FROM filledbottles WHERE brandid='$brand' AND quantites='$quantity' ";
	$query = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($query)){
		$id = $row['id'];
		$price =$row['pricevalue'];
		$total = $price * $order;
	}
	
	$insert = "INSERT INTO dailyrecord(count,date,bottle,clientorder,total,client,dept)VALUES('NULL','$d','$id','$order','$total','$customer','$deb')";
	$query2 = mysqli_query($conn,$insert);
	if($query2){
		
	}
	else{
		?>
		<script>
			alert("failed");
		</script>
		<?php
	}

	
}
?>