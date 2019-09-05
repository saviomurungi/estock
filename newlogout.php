<?php
session_start();
if(isset($_POST['value'])){
	$val = $_POST['value'];
	if($val=="no"){
		
	session_destroy();
	// header('Location:index.php');
	echo "<script>window.open('index.php','_self');</script>";
     // include "logout.php";
	}
	elseif($val == "yes"){
		include "connection.inc.php";
  $d = date("Y-m-d", strtotime(" 1 DAY"));
  $query = mysqli_query($conn,"SELECT * FROM total_stock_table ");

  while($row = mysqli_fetch_array($query)){
      $bottle = $row['bottle'];
      $stock_amount = $row['stock_amount'];
      $stock_total = $row['stock_total'];

  $query2 = mysqli_query($conn,"INSERT INTO stock_track (count,date,stockamount,stocktotal,bottle)VALUES('NULL','$d','$stock_amount','$stock_total','$bottle')");
    }
    session_destroy();
	// header('Location:index.php');
	echo "<script>window.open('index.php','_self');</script>";

      // include 'logout.php';
	}
}


?>
<!-- <script type="text/javascript">
	$(document).ready(function(){
		$(".optv").click(function(){
			value = $(this).attr("id");
			$.post("newlogout.php",{val:value},function(result){
				$("#results").html(result);
			});
		});
	});
</script> -->