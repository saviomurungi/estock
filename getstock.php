<?php
include "connection.inc.php";
//price snipet
if(isset($_POST['brand'])){
$brand = $_POST['brand'];
$milz = $_POST['qty'];
$sql= "SELECT id FROM filledbottles WHERE brandid='$brand' AND quantites='$milz' ";
$query= mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($query))
{
	$bottle = $row['id'];

}
$sq = mysqli_query($conn,"SELECT stock_amount,stock_total FROM total_stock_table WHERE bottle='$bottle'");
while ($r = mysqli_fetch_array($sq)) {

  $value = $r['stock_amount'];
  $tot = $r['stock_total'];
}
?>
<!--<div class=""><label class="label label-danger"> unit price =</label></div>-->

<div class="row">
  <div class="col-auto"><br>
    <h3 class=" h5 text-center mt-2 ml-5">STOCK AVAILABLE     <i class="fas fa-arrow-right"></i></h3>
  </div>
  <div class="col-auto">
    <!-- <h3 class=" h5 text-center mt-2">STOCK AVAILABLE</h3> -->
    <label for="amount" class="badge badge-dark">Amout(qty)</label>
    <input type="number" readonly class="form-control form-control-sm" id="numavail" value="<?php echo $value; ?>">
    
  </div>
  <div class=" col-auto">
    <label for="totalshs" class="badge badge-dark">Total(shs)</label>
      <input type="number" readonly class="form-control form-control-sm" value="<?php echo $tot; ?>">
  </div>
	
</div>
<?php

}

?>
