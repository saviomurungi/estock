<html>
	<head>
		<title>CLIENTSIDE</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/mdb.min.css" rel="stylesheet">
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/popper.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/mdb.min.js"></script>
	</head>
	<body>
		<div class="container row">
			<div class="card card-lg wrapper">
				<div class="card-header bg-dark">
					<h3 class="h3 text-primary text-center font-weight-bold">CLIENT ORDER</h3>
				</div>
				<div class="card-body">
					<form class="container" method="POST">
				<div class="form-row">
					<div class="col-2 form-group">
						<label class="badge badge-sm badge-amber">Milligrams</label>
						<div class="input-group input-group-sm">
							<select class="form-control form-control-sm" name="mils" id="select1">
								<option value="NULL">select milligrams</option>
									<?php include "quantity.inc.php";?>
							</select>
						</div>
					</div>
				<div class="col-2 form-group">
					<label class="badge badge-sm badge-amber">Brand</label>
					<div class="input-group input-group-sm">
						<select class="form-control form-control" id="brand" name="brand">
							<option value="NULL">select brand</option>
						</select>
					</div>
				</div>
				<div class="col-2 form-group" >
					<label class="badge badge-sm badge-amber">Price</label>
					<div class="input-group input-group-sm">
						<span class="form-control form-control-sm" id="price"></span>
					</div>
				</div>
				
				<div class="col-2 form-group">
					<label class="badge badge-sm badge-amber">Orders</label>
					<div class="input-group input-group-sm">
						<input type="number" min="0" class="form-control form-control-sm" name="order" required id="order">
					</div>
				</div>
				<div class="col-2 form-group">
					<label class="badge badge-sm badge-amber">Customer</label>
					<div class="input-group input-group-sm">
						<input type="tel" name="customer" class="form-control form-control-sm" placeholder="+256...">
					</div>
				</div>
				<div class="col-2 form-group">
					<div class="input-group ">
						<button type="submit" name="clientrecord" class="form-control btn  btn-sm btn-elegant form-control-sm  ">Record</button>
					</div>
				</div>
				</div>
				
			</form>
				</div>
			</div>
			
			<div class="container row">
				<table class="table table-condensed" >
					<thead>
						<tr>   
						  <th>Milligarms</th>
						  <th>Brand</th>
						  <th>Price</th>
						  <th>Stock</th>
						  <th>Total(shs)</th>
						  <th>Customer</th>
						 <th>Date</th>
						   
						</tr>
					  </thead>
					<tbody id="dailyrecords"></tbody>
				</table>
			</div>
			
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
			$.post("price.php",{brand:mls,qty:milz},function(results){
				$("#price").html(results);
				});
			});
		});
	$(function(){
		$("#dailyrecords").load("retrieverecords.php",function(responseTxt,statusTxt,xhr){
			if(statusTxt =="success"){
				continue;
			}
			if(statusTxt !="success"){
				alert("ERROR:"+xhr.status());
			}
			});
		});
		</script>
	
	</body>
</html>
<?php
include "submitclientorder.php";
?>