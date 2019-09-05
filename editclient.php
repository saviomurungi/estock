<!--<php-->
<?php include "nav.php";?>

 
     <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
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
       </div>
     </nav>


<div class="container-fluid  justify-content-center">

        

       <div class="col-auto">   
        
<?php  include "change.php"; ?>
<!--</div>-->
    
 
<!-- < include "nav.php"?> -->
        <div class="container-fluid mt-5">
       <table class="table table-hover table-condensed table-striped" >
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

</div>
</div>  
</div>

<?php

    include "footer.php";

?>


