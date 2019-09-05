<?php
if(isset($_GET['change'])){
	$val = $_GET['change'];
		include "connection.inc.php";
		$query = mysqli_query($conn,"SELECT * FROM dailyrecord WHERE count = '$val'");
		while($row = mysqli_fetch_array($query)){
			$bottle =$row['bottle'];
			$order = $row['clientorder'];
			$total = $row['total'];
			$deb = $row['dept'];
			$marketeer = $row['client'];
		$dbc = mysqli_query($conn,"SELECT MarkName FROM marketeer WHERE id = '$marketeer'");
	$extract = mysqli_fetch_array($dbc);
	$Markname = $extract['MarkName'];
		}
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
<html>
<head>
		<title>CLIENTSIDE</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/mdb.min.css" rel="stylesheet">
		 
     <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
</head>
<body >
<div class="container-fluid justify-content-center">
<h4 class="h4 h4-responsive text-center">EDIT RECORD</h4>
<div class="hinge"></div>
<form method="post" class="container-fluid">
	<div class="form-row">
		<div class="col-2 form-group">
			<div class="input-group input-group-sm">
			<select contenteditable="true" name="milligrams" id="select2" class="form-control form-control-sm">
				<option class="bg-dark" value="<?php echo $qtyId;?>"><?php echo $qty; ?></option>
				<?php include "quantity.inc.php"; ?>
			</select>
			</div>
		</div>
		<div class="col-2 form-group">
			<div class="input-group input-group-sm">
				<select name="brand" id="brand" class="form-control form-control-sm">
				<option class="bg-dark" value="<?php echo $brandid;?>"><?php echo $brandname; ?></option>
			</select>
			</div>	
			
		</div>
		<div class="col-2 form-group">
			
			<div class="input-group input-group-sm">
				<input type="number" min="0" value="<?php echo $order; ?>" class="form-control form-control-sm" name="order" required id="order">
			</div>
		</div>
		<div class="col-2 form-group">
			<div class="input-group input-group-sm">
			<select name="salesman" class="form-control form-control-sm">
			<option class="bg-dark" value="<?php echo $marketeer; ?>"><?php echo $Markname; ?></option>
				<?php include "marketeer.php" ?>
			</select>
			</div>
		</div>
		<div class="col-2 form-group">
			<button type="submit" class="btn btn-dark btn-sm" name="editrec">CHANGE</button>
		</div>
	</div>
</form>
<?php  include "change.php"; ?>
</div>
<script type="text/javascript">
	
	$(document).ready(function(){
			$("#select2").change(function(){
			var mls = $("#select2").val();
			$.post("brand.php",{value:mls},function(results){
				$("#brand").html(results);
				});
			});
		});
</script>
</body>
</html>

<?php }?> 

