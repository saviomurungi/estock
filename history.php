<?php include"nav.php";

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



<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <!--<h3>KISOGA GENERAL STORES</h3>-->
            <img  class="img-responsive mx-auto" src="img/kgs.png" width="100%" height="100%">
        </div>

       <div class="container-fluid mt-0">
         <ul class="list-unstyled components">

            <li >
                <a rel="item1" class="fa fa-dashboard " href="dash_home.php"> Dashboard</a>

            </li>
            <li >
                <a  rel="item2"href="client_order.php" class=" mt-2 fa fa-user"> Client order</a>

            </li>

            <li>
                <a rel="item3"href="ccba.php" class=" mt-2 fa fa-truck"> Ccba delivery</a>
            </li>
            <li>
                <a  href="stat.php" class=" mt-2 fa fa-line-chart"> Sales performance</a>

            </li>
            <li class="active">
                <a href="history.php" class=" mt-2 fa fa-archive"> Sales history</a>

            </li>
              <li>
                <a href="logout.php" class=" mt-2 fa fa-gear"> logout</a>

            </li>

        </ul>
       </div>
     </nav>


<!--<h1 class="display-4 accent-1 text-black container"> DATABASE RECORDS UPDATE</h1>-->
<div class="container-fluid">
        
                <div class="mt-4">
			
            <h6 class="font-weight-bold text-center text-elegant "> Input date to show records</h6>
				<div class="mx-auto ">
                <div class="input-group input-group-sm ">
					<div class="input-group input-group-sm ">
						<input class="form-control form-control-sm" type="date" id="date" placeholder="">
                        
                        <button type="button" id="check" class="btn btn-sm btn-elegant ml-1">Check</button>
					</div>
				</div>
                </div>
			
				
			</div>
                
              
			
				<div class="container-fluid">
                    
					<div id="records">
						<h5 class="text-elegant text-center mt-5 font-weight-bold"> RECORDS GO HERE</h5>
					</div>
				</div>
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
			$(function(){
				$("#check").click(function(){
					var nxt = $("#date").val();
					$.post("records.php",{value:nxt},function(result){
					$("#records").html(result);	});
					});
			});
		</script>
</div>
<?php include"footer.php"?>
