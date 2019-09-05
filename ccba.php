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

            <li>
                <a rel="item1" class="fa fa-dashboard " href="dash_home.php"> Dashboard</a>

            </li>
            <li >
                <a  rel="item2"href="client_order.php" class=" mt-2 fa fa-user active"> Client order</a>

            </li>

            <li class="active">
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


<!--<h1 class="display-4 accent-1 text-black container"> THE CLIENT ORDER FORM GOES HERE</h1>-->
    <div class="container-fluid">
<div class="container-fluid mt-3">
				
        
 <h3 class="monospace-text text-center">ccba delivery</h3>
<form class="form-inline mx-auto d-flex justify-content-center" method="POST">
     
    <div class="form-group  mx-1">
        
     <select class="form-control form-control-sm" name="quantity" id="select1">
          <option value="null">select mills</option>
										<?php include "quantity.inc.php";?>
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
<?php include "submit.php";?>
    </div>

<div class="container-fluid">
    <table class="table table-hover table-condensed table-striped ">
								<thead>
                                <tr>
										<th>Time</th>
										<th>Milligrams</th>
										<th>Brand</th>
										<th>Stock(shs)</th>
										<th>Total</th>
                                </tr>
								</thead>
								<tbody id="freshrecords">
                                    <?php include "retrieve.php"; ?>
                                </tbody>
    </table>
    
</div>
			
        </div>
			<script type="text/javascript" >
      $(document).ready(function(){
        $("#recordload").click(function(){
        $("#freshrecords").load("retrieve.php",function(responseTxt,statusTxt,xhr){
          if(statusTxt =="success"){
            alert("success");
          }
          if(statusTxt != "success"){
            alert("ERROR:"+xhr.status());
          }
        });
      });
    });
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


</div>
<?php include "footer.php";?>
