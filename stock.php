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
            
            <li >
                <a rel="item1" class="fas fa-tachometer-alt " href="dash_home.php"> Dashboard</a>
              
            </li>
            <li >
                <a  rel="item2"href="client_order.php" class=" mt-2 fa fa-user"> Client order</a>
                
            </li>
       
            <li>
                <a rel="item3"href="ccba.php" class=" mt-2 fa fa-truck"> Ccba delivery</a>
            </li>
            <li class="active">
                <a  rel="item4"href="stock.php" class=" mt-2 fa fa-line-chart"> Stock records</a>
                 
            </li>
            <li>
                <a href="history.php" class=" mt-2 fa fa-archive"> Sales history</a>

            </li>
             <li class="">
             
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
     

<!--<h1 class="display-4 accent-1 text-black container">STORE SALE ANALYSIS</h1>-->
<div class="container-fluid mb-5">
        
                <div class="mt-4">
      
            <h6 class="font-weight-bold text-center text-elegant "> Input date to show stock records</h6>
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
                        
<!--            <h5 class="text-elegant text-center mt-5 monospace-text"><i class="fa fa-circle-o-notch fa-spin"> </i> running queries</h5>-->
              <div class=" container-fluid my-5">
                <h4 class="h4 h4-responsive text-center">THE AVAILABE STOCK APPEARS HERE</h4>
              </div>          
          </div>
        </div>
      </div>
    
<!--      <h3 class="bold text-center  -monospace">  sales report</h3>
<div class="row mb-3 ">
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card bg-success text-white ">
                        <div class="card-body bg-success">
                            <div class="rotate">
                                <i class="fa fa-money fa-1x fa-spin pull-right"></i>
                             <h6 class="text-monospace">Daily total(SHS):</h6>
                                <i class="">234500 </i>
                            </div>
                
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card text-white bg-danger ">
                        <div class="card-body bg-danger">
                            <div class="rotate">
                                <i class="fa fa-list fa-1x fa-spin pull-right"></i>
                                  <h6 class="text-monospace">Weekly total:</h6>
                            </div>
                 
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card text-white bg-info">
                        <div class="card-body bg-info">
                            <div class="rotate">
                                <i class="fa fa-file fa-spin  fa-1x pull-right"></i>
                                  <h6 class="text-monospace">Annual total:</h6>
                            </div>
                          
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card text-white bg-warning">
                        <div class="card-body">
                            <div class="rotate">
                                <i class="fa  fa-book  fa-spin fa-1x pull-right"></i>
                                  <h6 class="text-monospace">Montly total:</h6>
                            </div>
                        </div>
                    </div>
                </div>
   </div>  -->        </div>

<!-- Grid row -->
   

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
          $.post("statistics.php",{value:nxt},function(result){
          $("#records").html(result); });
          });
      });
    </script>
</div>
</div>
<?php include "footer.php"?>
