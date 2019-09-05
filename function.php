<?php
function ressetContainer($bottle,$amount,$total){
  include "connection.inc.php";
  //global $conn;
  $query = mysqli_query($conn,"SELECT * FROM total_stock_table WHERE bottle='$bottle'");
  while ($row = mysqli_fetch_array($query)) {
    $amt = $row['stock_amount'];
    $tot = $row['stock_total'];
  
  $newamount = $amt + $amount;
  $newtotal = $tot + $total;
}

  $war = mysqli_query($conn," UPDATE total_stock_table SET stock_amount='$newamount' ,stock_total='$newtotal' WHERE bottle='$bottle'");
  // if($war){
  //   echo "
  //   <script>
  //     alert('hellow update');
  //   </script>";
  // }

}

function changeTheContainer($bottle,$amount,$total){
  include "connection.inc.php";
  //global $conn;
  $query = mysqli_query($conn,"SELECT * FROM total_stock_table WHERE bottle='$bottle'");
  while ($row = mysqli_fetch_array($query)) {
    $amt = $row['stock_amount'];
    $tot = $row['stock_total'];
  
  $newamount = $amt - $amount;
  $newtotal = $tot - $total;
}

  $war = mysqli_query($conn," UPDATE total_stock_table SET stock_amount='$newamount' ,stock_total='$newtotal' WHERE bottle='$bottle'");
  // if($war){
  //   echo "
  //   <script>
  //     alert('hellow update');
  //   </script>";
  // }
}

//ressetContainer('BPR1',0,7);a
//changeTheContainer('BPR2',0,0);


//CCBA EDITTING
function ressetCCBA($bottle,$amount,$total){
  include "connection.inc.php";
  //global $conn;
  $query = mysqli_query($conn,"SELECT * FROM total_stock_table WHERE bottle='$bottle'");
  while ($row = mysqli_fetch_array($query)) {
    $amt = $row['stock_amount'];
    $tot = $row['stock_total'];
 
  $newamount = ((int)$amt - $amount);
  $newtotal = ((int)$tot - $total);
 
  
 }
  $war = mysqli_query($conn," UPDATE total_stock_table SET stock_amount='$newamount' ,stock_total='$newtotal' WHERE bottle='$bottle'");
  // if($war){
  //   echo "
  //   <script>
  //     alert('hellow update');
  //   </script>";
  // }
  

}




function edit_table(){
include "connection.inc.php";
$sq = "SELECT * FROM ccbadelivery ORDER BY count DESC";
static $var =0;
$query = mysqli_query($conn,$sq);
while($row=mysqli_fetch_array($query)){
  $bottle = $row['bottle'];
  $count = $row['count'];
  $date = $row['date'];
  $total =$row['total'];
  $delivery = $row['ccbdelivery'];
  $var++;

$sql ="SELECT * FROM filledbottles WHERE id = '$bottle'";
$query2 = mysqli_query($conn,$sql);
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
<tr>
  <td><?php echo $date; ?></td>
  <td><?php echo $qty; ?></td>
  <td><?php echo $brandname; ?></td>
  <td><?php echo $delivery; ?></td>
  <td><?php echo $total;?></td>
  <td><a href="Edit.php?edit=<?php echo $count; ?>" class=" btn btn-sm btn-secondary btn-elegant">Edit</a></td>

</tr>
<?php

}


}

//updated funtions

function mantainDbTrack($date,$bottle,$oldamount,$oldtotal){
  include "connection.inc.php";

$qz = mysqli_query($conn,"SELECT * FROM total_stock_table_daily WHERE date='$date' AND bottle='$bottle' ");
while($row = mysqli_fetch_array($qz)){
  $amount = $row['amount'];
  $total = $row['total'];

  $newamount = (int)$amount - $oldamount;
  $newtotal = (int)$total - $oldtotal;
}

$query = mysqli_query($conn,"UPDATE total_stock_table_daily SET amount='$newamount' ,total='$newtotal' WHERE date = '$date ' AND bottle='$bottle'");
if($query){
  // echo "<script>  alert('success') </script>";
}
}

function mantainUpdateDbTrack($date,$bottle,$oldamount,$oldtotal){
  include "connection.inc.php";


$qz = mysqli_query($conn,"SELECT * FROM total_stock_table_daily WHERE date='$date' AND bottle='$bottle' ");
if(mysqli_num_rows($qz)>0){
while($row = mysqli_fetch_array($qz)){
  $amount = $row['amount'];
  $total = $row['total'];

  $newamount = $amount + $oldamount;
  $newtotal = $total + $oldtotal;
}

$query = mysqli_query($conn,"UPDATE total_stock_table_daily SET amount='$newamount' ,total='$newtotal' WHERE date = '$date ' AND bottle='$bottle'");

}else{
  $qut = mysqli_query($conn,"SELECT * FROM total_stock_table WHERE bottle='$bottle'");
    while($rw = mysqli_fetch_array($qut)){

      $amount = $rw['stock_amount'];
      $tot = $rw['stock_total'];
      $amount = $amount - $oldamount;
      $tot = $tot - $oldtotal;

      $dbq = mysqli_query($conn,"INSERT INTO total_stock_table_daily (count,date,amount,total,bottle)VALUES('NULL','$date','$amount','$tot','$id') ");
}


}
}


?>

