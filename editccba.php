
<!--	<title>EDIT RECORD</title>-->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel= "stylesheet" href = "css/mdb.min.css" >
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/mdb.min.js"></script>

<?php include "nav.php";?>
<!--
<php

//include "connection.inc.php";
$rec = $_GET['edit'];
$var =mysqli_query($conn,"SELECT * FROM ccbadelivery WHERE count ='$rec'");

while($row = mysqli_fetch_array($var)){
	$bottle = $row['bottle'];
	
	$stock = $row['ccbdelivery'];
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
-->
<!--<body class="accent-1 mdb-skin">-->
 
<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <!--<h3>KISOGA GENERAL STORES</h3>-->
            <img  class="img-responsive mx-auto" src="img/kgs.png" width="100%" height="30%">
        </div>

       <div class="container-fluid mt-0">
         <ul class="list-unstyled components">

            <li>
                <a rel="item1" class="fas fa-tachometer-alt" href="dash_home.php"> Dashboard</a>

            </li>
            <li >
                <a  rel="item2"href="client_order.php" class=" mt-2 fa fa-user active"> Client order</a>

            </li>

            <li class="#">
                <a rel="item3"href="ccba.php" class=" mt-2 fa fa-truck"> Ccba delivery</a>
            </li>
            <li>
                <a  rel="item4"href="stock.php" class=" mt-2 fa fa-line-chart"> Stock records</a>

            </li>
            <li>
                <a href="history.php" class=" mt-2 fa fa-archive"> Sales history</a>

            </li>
              <li class="active">
             
             <a class="fas fa-edit" data-toggle="modal" data-target="#edit1" > <span class="caret"></span>edit records</a>
            
             </li>
             <li class="">
               <a href="empty.php" class="fas fa-sync"> empties</a>

             </li>
         <li>
                <a href="#" class=" mt-2 fas fa-sign-out-alt" data-toggle="modal" data-target="#logout"> logout</a>

            </li>
        </ul>	


        </ul>
       </div>
     </nav>

<div class="container-fluid">

<!--
 
	<div class=" mt-5 d-flex justify-content-center col-auto">
        
		<form method="post">
            <h4 class="h4 h4-responsive text-center"> EDIT RECORD </h4>
	<div class="form-row">
		<div class="col-auto form-group">
			<div class="input-group input-group-sm">
			<select contenteditable="true" name="milligrams" id="select1" class="form-control form-control-sm">
				<option class="bg-dark" value=">< echo $qty; ?></option>
				
			</select>
			</div>
		</div>
		<div class="col-auto form-group">
			<div class="input-group input-group-sm">
				<select name="brand" id="brand" class="form-control form-control-sm">
				<option class="bg-dark" value="< echo $brandid;?>"><echo $brandname; ?></option>
				<span id="brand"></span>
			</select>
			</div>	
			
		</div>
		<div class="col-auto form-group">
			
			<div class="input-group input-group-sm">
				<input type="number" min="1" value="< echo $stock; ?>" class="form-control form-control-sm" name="deliveries" required id="deliveries">
			</div>
		</div>
		
		<div class="col-auto form-group">
			<button type="submit" class="btn btn-elegant btn-sm mt-0" name="submit">CHANGE</button>
		</div>
        
	</div>
         
</form>
        
        </div>
-->
<!--    <hr class="hr-light">-->
   
    <div class="col-auto mt-3">
         <!-- <h3 class="h3 h3-responsive text-center">ccba records</h3> -->
    <table class="table table-hover table-condensed table-striped ">
								<thead>
                                <tr>
										<th>Date</th>
										<th>Milligrams</th>
										<th>Brand</th>
										<th>Stock</th>
										<th>Total</th>
                                </tr>
								</thead>
								<tbody id="freshrecords">
                                    <?php include "retrieve.php"; ?>
                                </tbody>
    </table>
    
</div>

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
			$.post("price.php",{brand:mls,qty:milz},function(resu){
				$("#unitprice").html(resu);
				});
			});
		});

	</script>



<?php include "footer.php"; ?>
