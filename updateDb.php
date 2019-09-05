<?php

  include "connection.inc.php";
  $d = date("Y-m-d");
  $query = mysqli_query($conn,"SELECT * FROM total_stock_table ");

  while($row = mysqli_fetch_array($query)){
      $bottle = $row['bottle'];
      $stock_amount = $row['stock_amount'];
      $stock_total = $row['stock_total'];

  $query2 = mysqli_query($conn,"INSERT INTO stock_track (count,date,stockamount,stocktotal,bottle)VALUES('NULL','$d','$stock_amount','$stock_total','$bottle')");
    }



?>
