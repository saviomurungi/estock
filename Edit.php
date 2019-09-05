<html>
<head>
	<title>EDIT RECORD</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel= "stylesheet" href = "css/mdb.min.css" >
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/mdb.min.js"></script>

</head>
<?php
include "connection.inc.php";
$rec = $_GET['edit'];
$var =mysqli_query($conn,"SELECT total ,ccbdelivery FROM ccbadelivery WHERE date ='$rec'");

while($row = mysqli_fetch_array($var)){
	$total = $row['total'];
	$stock = $row['ccbdelivery'];
?>
<body class="accent-1 mdb-skin">
	<center>
	<div class="container row">
		<div class="card col-md-6 col-md-offset-3" >
			<div class="card-header border border-amber rounded mb-2">
				<h3 class="h3 text-elegant font-weight-bolder text-center">Edit Record</h3>
			</div>

				<div class=" card-body">
					<form method="POST" class="container card-body">
						<div class=" form-group ">
							<label>Date</label>
							<input readonly="readonly" type="text" class="form-control form-control-sm" value="<?php echo $rec;?>">
						</div>
						<div class="form-group  ">
							<label>milligrams</label>
							<select id="select1" name="milligrams" class="form-control ">
							<option value="NULL">select mills</option>
							<?php include "quantity.inc.php"; ?>
							</select>
						</div>
						<div class="card-header form-group">
							<label>Brand</label>
							<div class="input-group input-group-lg">
								<select name="brand" id="brand" class="form-control">
								<option value="null">select Brand</option>
							</select>
							</div>

						</div>
						<div class="form-group card-header">
							<label class="accent-1 form-text lead text-md">Unit Price</label>
							<span id="unitprice" class="input-group input-group-lg"></span>
						</div>
						<div class="form-group card-header ">
							<label class="badge badge-amber badge-lg badge-secondary">Edit quantity</label>
							<div class="input-group input-group-lg">
								<input type="number" id="" value="<?php echo $stock; ?>" class="form-control" name="newqty">
							</div>
						</div>
						<p class="form-text lead font-weight-bold"> The total will change automaticaly</p>
						<div class="form-group">
							<div class="input-group input-group-lg">
								<button name="submit" type="submit" class="form-control form-control-lg btn btn-amber btn-secondary">Edit</button>
							</div>
						</div>

				</form>
			</div>
		</div>
	</center>
	</div>

	<script type="text/javascript">
			$(document).ready(function(){
			$("#select1").change(function(){
			var mls = $("#select1").val();
			$.post("brand.php",{value:mls},function(results){
				$("#brand").html(results);
				});
			});
			});
			$(document).ready(function(){
		$("#brand").change(function(){
			var mls = $("#brand").val();
			var milz=$("#select1").val();
			$.post("price.php",{brand:mls,qty:milz},function(resu){
				$("#unitprice").html(resu);
				});
			});
		});

	</script>

</body>
<?php
}
?>
</html>
<?php
if(isset($_POST['submit'])){
	$v = $_POST['newqty'];
	$brand = $_POST['brand'];
	$quantity=$_POST['milligrams'];

	$sql = "SELECT * FROM filledbottles WHERE quantites = '$quantity' AND brandid ='$brand'";
	$query = mysqli_query($conn,$sql);
	while($rw = mysqli_fetch_array($query)){
	$price = $rw['pricevalue'];
	$id = $rw['id'];
	$total = $price * $v;


	$q = mysqli_query($conn,"UPDATE ccbadelivery SET ccbdelivery='$v', bottle='$id',total='$total' WHERE date='$rec'");;
	if($q){
	header('Location:ccba.php');
	}
	}
}

?>
