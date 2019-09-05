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
                <a rel="item1" class="fa fa-dashboard " href="dash_home.php"> Dashboard</a>
              
            </li>
            <li >
                <a  rel="item2"href="client_order.php" class=" mt-2 fa fa-user"> Client order</a>
                
            </li>
       
            <li>
                <a rel="item3"href="ccba.php" class=" mt-2 fa fa-truck"> Ccba delivery</a>
            </li>
            <li class="active">
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
     

<!--<h1 class="display-4 accent-1 text-black container">STORE SALE ANALYSIS</h1>-->
<div class="container mt-0"> 
     <h3 class="bold text-center  -monospace">  sales report</h3>
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
            </div>

<!-- Grid row -->
     <h3 class="bold text-center text-monospace"> Empties sale report</h3>
<div class="row mb-3 ">
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card bg-success text-white ">
                        <div class="card-body bg-success">
                            <div class="rotate">
                                <i class="fa fa-money fa-1x fa-spin pull-right"></i>
                             <h6 class="text-monospace">Daily total:</h6>
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
                                  <h6 class="text-monospace">Monthly total:</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<!-- Grid row -->

     <h3 class="bold text-sm text-monospace"> sales progress</h3>
    <p class=" text-center">--------------graph area-----------------------</p>
</div>



</div>
<?php include"footer.php"?>
