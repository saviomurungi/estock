<?php include"nav.php"?>

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
            <li  class="active">
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
     

 


     <!--<h1 class="display-4 accent-1 text-black container"> THE EMPTIES ORDER FORM GOES HERE</h1>-->
     <div class="container-fluid mt-5">
			<form class="container-fluid" method="POST">
				<div class="form-row">
					<div class="col-4 ">
						<div class="form-group">
							<label class="text-sm h6 text-center text-elegant">SELECT MILLS</label>
							<div class="input-group input-group-sm">
								<select required name="milligrams" id="mils" class="form-control form-control-sm">
									<option value="NULL">select milligrams</option>
									<?php  include "emptybottle.php"; ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<table class="table table-sm table-condensed table-active">
								<tr>
									<th>
										Bottle(shs)
									</th>
									<th>
										Shell(shs)
									</th>
									<th>
										B+S(shs)
									</th>
								</tr>
								<tr id="prices"></tr>
							</table>
						</div>
					</div>
					<div class="col-4 ">
						<div class="form-group">
							<div class="form-check">
								<label class="form-check-label">
									<input type="radio" required class="form-control form-control-sm opt" value="1" name="opt">Bottles only
								</label>
								<label class="form-check-label">
									<input type="radio" required class="form-control form-control-sm opt" value="2" name="opt">Shell only
								</label>
								<label class="form-check-label">
									<input type="radio" required class="form-control form-control-sm opt" value="3" name="opt">Bottle+Shell
								</label>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group input-group-sm" id="imp">
								<i>select category</i>
							</div>
						</div>
					</div>
					<div class="col-4">
            <div class="form-group">
              </label>
								<label class="form-check-label">
									<input type="checkbox" class="form-control form-control-sm " value="1" name="dept">Debt
								</label>
            </div>
						<div class="form-group">
							<button name="submit" type="submit" id="save" class=" btn btn-sm btn-elegant ">Save</button>
						</div>
					</div>
				</div>
			</form>
            <?php include "emptysubmit.php"; ?>
			<hr class="hr-light">
			<div class="container-fluid row">
				<div class="col-4">
					<h4 class="h4 text-center text-elegant">Empty Bottle</h4>
					<table class="table table-sm table-striped">
						<tr>
							<th>milligram</th>
							<th>Order</th>
							<th>total(shs)</th>
						</tr>
						<?php include "getbottle.php"; ?>
					</table>
				</div>
				<div class="col-4">
					<h4 class="h4 text-center text-elegant">Empty Shells</h4>
					<table class="table table-sm table-striped">
						<tr>
							<th>milligram</th>
							<th>Order</th>
							<th>total(shs)</th>
						</tr>
						<?php include "getshell.php"; ?>
					</table>
				</div>
				<div class="col-4 ">
					<h4 class="h4 text-center text-elegant">Bottle + Shell</h4>
					<table class="table table-sm table-striped">
						<tr>
							<th>milligram</th>
							<th>Order</th>
							<th>total(shs)</th>
						</tr>
						<?php include "getcrate.php"; ?>
					</table>
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
		<script type="text/javascript">
			$(document).ready(function(){
				$("#mils").change(function(){
				var xv =$("#mils").val();
				$.post("fetchprice.php",{value:xv},function(result){
						$("#prices").html(result);
					});
					});
				});
			$(document).ready(function(){
				$(".opt").click(function(){
				var xv =$(this).val();
				$.post("imp.php",{value:xv},function(result){
						$("#imp").html(result);
					});
					});
				});
		</script>
        <!-- js emty cpy -->

</div>
<?php include"footer.php"?>
