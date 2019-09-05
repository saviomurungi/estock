
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

            <li class="active">
                <a rel="item1" class="fa fa-dashboard " href="dash_home.php"> Dashboard</a>

            </li>
            <li >
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



<div class="container mx-auto mt-0" style="bottom:0" >
    
       <div class="card-deck my-0">
  <div class=" card  my-5  cards-bg shadow success-color-dark">
    <div class="card-body  text-center">
        <a href="client_order.php" class=""> <img class="img-responsive  " width=100px; src="img/add.png"></a>
<!--       <div class="mask rgba-black-slight"></div>-->
      <p class="card-text "style="color:#111;">CLEINT ORDER </p>
          </div>
  </div>
  <div class="card  my-5 cards-bg shadow info-color-dark">
    <div class="card-body text-center ">
        <a href="ccba.php"><img class="img-responsive contianer" height=100px; src="img/truck2.png"></a>
      <p class="card-text " style="color:#111;">CCBA DELIVERY</p>
    </div>
  </div>
  <div class="card  my-5 cards-bg shadow danger-color-dark">
    <div class="card-body  text-center">
        <a href="stat.php"><img class="img-responsive contianer"  height=100px; src="img/stat.png"></a>

      <p class="card-text "style="color:#111;">SALES PERFORMANCE</p>
    </div>
  </div>
  <div class="card  my-5 cards-bg shadow warning-color-dark">
    <div class="card-body cards text-center">
        <a href="history.php"><img class="img-responsive contianer " height="100px" src="img/history.png"></a>

      <p class="card-text" style="color:#111;">SALES HISTORY</p>
      </div>
  </div>
        <div class="container mt-0 ml-5 mr-5 pt-0 ">




<!--<div class="container">-->
    <h4 class="text-black text-center">RECENT SALES</h4>

<div class="table-responsive">

  <table class="table">
    <thead>
      <tr>

        <th scope="col">Milligarms</th>
        <th scope="col">Brand</th>
        <th scope="col">Price(shs)</th>
        <th scope="col">Stock</th>
        <th scope="col">Total(shs)</th>
          <th scope="col">Salesman</th>
            <th scope="col">Date</th>

      </tr>
    </thead>
    <tbody>
    <?php include 'recentsales.php'; ?>  
    </tbody>
  </table>

</div>
</div>


       </div>


</div>

</div>

<?php include "footer.php"?>
