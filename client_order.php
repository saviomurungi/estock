<?php
session_start();
if(!$_SESSION['USER']['ADMIN']) {
    header('Location:index.php');
    ?>
<script type="text/javascript">

window.open("index.php","_self");
</script>
<?php
}
?>

<?php include"nav.php";?>


<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <!--<h3>KISOGA GENERAL STORES</h3>-->
            <img  class="img-responsive mx-auto" src="img/kgs.png" width="100%" height="100%">
        </div>

       <div class="container-fluid mt-0">
         <ul class="list-unstyled components">

            <li>
                <a rel="item1" class="fa fa-dashboard " href="dash_home.php"> Dashboard</a>

            </li>
            <li class="active" >
                <a  rel="item2"href="client_order.php" class=" mt-2 fa fa-user active"> Client order</a>

            </li>

            <li>
                <a rel="item3"href="ccba.php" class=" mt-2 fa fa-truck"> Ccba delivery</a>
            </li>
            <li>
                <a  rel="item4"href="stat.php" class=" mt-2 fa fa-line-chart"> Sales performance</a>

            </li>
            <li>
                <a href="history.php" class=" mt-2 fa fa-archive"> Sales history</a>

            </li>
              <li>
                <a href="logout.php" class=" mt-2 fa fa-gear"> logout</a>

            </li>

        </ul>
       </div>
     </nav>


<section class="container mt-0">
 <div class="wrapper pull-right">
    <a href="empty.php" class="btn btn-elegant btn-sm mt-5">EMPTIES REQUEST</a>
    </div>
   <!--client_order form -->
   
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

     <div class="container-fluid row">
       <table class="table table-condensed" >
         <thead>
           <tr>
             <th>Milligarms</th>
             <th>Brand</th>
             <th>Price(shs)</th>
             <th>Stock</th>
             <th>Total(shs)</th>
             <th>Customer</th>
            <th>Date</th>

           </tr>
           </thead>
         <tbody id="dailyrecords">
           <?php include 'retrieverecords.php';?>
         </tbody>
       </table>
     </div>

   </div>
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
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
				$("#price").html(resu);
				});
			});
		});
 $(document).ready(function(){
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


</section>

</div>


<?php include"footer.php"?>
