
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>kisoga general stores limited</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<!--  </style>-->
</head>
<body>


<div class="container-fluid">
 <h3 class="monospace-text text-center">client order</h3>
<form class="form-inline mx-auto d-flex justify-content-center" method="POST">
     
    <div class="form-group  mx-1">
        
      <select class="form-control form-control-sm" name="mils" id="select1">
    <option value="NULL">select milligrams</option>
									<?php include "quantity.inc.php";?>    
  		</select>
    </div>
    <div class="form-group mx-1">

        <select class="form-control form-control-sm" id="brand" name="brand">
  		<option value="null">select brand</option>
  		</select>
    </div>
    <div class="form-group mx-1" id="price">

        
        
    </div>
    <div class="form-group mx-1">

        <input  class="form-control form-control-sm " name="order" required id="order" placeholder="order">
    </div> 
    <div class="form-group mx-1">

     
       <select name="customer" class="form-control form-control-sm">
  		
    <option value="NULL">Sales Man</option>
							<?php include "marketeer.php" ?>
  		</select>
    </div> 
    <!--<div class="form-group mx-1">

        <input type="text"class="form-control form-control-sm "   readonly="readonly" placeholder="total read only">
        
    </div>-->
    
    <div class="checkbox mx-1">
        <label><input type="radio" class="form-control form-control-sm" value="1" name="debt">debt</label>
    </div>
    <button type="submit" name="clientrecord" class="btn btn-elegant btn-sm ">save record</button>
</form>
<?php
include "submitclientorder.php";
?>
    </div>
<!--    client order -->
   <!-- <div class="container-fluid">
        
 <h3 class="monospace-text text-center">ccba delivery</h3>
<form class="form-inline mx-auto d-flex justify-content-center" method="POST">
     
    <div class="form-group  mx-1">
        
     <select class="form-control form-control-sm" name="quantity" id="select1">
          <option value="null">select mils</option>
										<?php // include "quantity.inc.php";?>
  		</select>
    </div>
    <div class="form-group mx-1">

      <select class="form-control form-control-sm" name="brand" id="brand">
  		<option value="null">select brand</option>
  		</select>
    </div>
    <div class="form-group mx-1" id="unitprice">

    </div>
    <div class="form-group mx-1">

        <input  class="form-control form-control-sm " placeholder="order" name="deliveries" id="deliveries">
    </div> 
    
    <div class="form-group mx-1" id="tot">

      
        
    </div>
    
    
    <button type="submit" name="record" class="btn btn-elegant btn-sm ">save record</button>
</form>
<?php //include "submit.php";?>
    </div>-->
        <div class="container-fluid ">
        
 <h3 class="monospace-text text-center">empty bottle order</h3>
<form class="form-inline mx-auto d-flex justify-content-center">
     
    <div class="form-group  mx-1">
        
            <select class="form-control form-control-sm">
  		<option value="null">select milligrams</option>
  		</select>
    </div>
    <div class="form-group mx-1">

        <select class="form-control form-control-sm">
  		<option value="null">select brand</option>
  		</select>
    </div>
    <div class="form-group mx-1">

        <input type="text"class="form-control form-control-sm "   readonly="readonly" placeholder="price read only">
        
    </div>
    <div class="form-group mx-1">

        <input  class="form-control form-control-sm " placeholder="order bottle">
    </div> 
     <div class="form-group mx-1">

        <input  class="form-control form-control-sm " placeholder="order shells">
    </div> 
    <div class="form-group mx-1">

     
               <select class="form-control form-control-sm">
  		<option value="null">salesman</option>
  		</select>
    </div> 
    <div class="form-group mx-1">

        <input type="text"class="form-control form-control-sm"   readonly="readonly" placeholder="total read only">
        
    </div>
<!--
    <div class="checkbox mx-1">
        <label><input type="checkbox">crate</label>
    </div>
-->
    
    <button type="submit" class="btn btn-elegant btn-sm ">save record</button>
</form>
    </div>
    <div class="container-fluid">
    <table class="table">
    <thead>
      <tr>

        <th scope="col">Milligarms</th>
        <th scope="col">Brand</th>
        <th scope="col">Price</th>
        <th scope="col">Stock</th>
        <th scope="col">Total</th>
          <th scope="col">sales man</th>

      </tr>
    </thead>
    <tbody>
<!--       include the php file   -->
    </tbody>
  </table>
</div>

    
     <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
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
				$("#price").html(resu);
				});
			});
		});
  
		$(document).ready(function(){
		$("#deliveries").keyup(function(){
			var order = $("#deliveries").val();
			var qty =$("#select1").val();
			var bra = $("#brand").val();
			$.post("total.php",{orderz:order,quantity:qty,brand:bra },function(result){
				$("#tot").html(result);
				});
			});
		});
  </script>
</body>

</html>
