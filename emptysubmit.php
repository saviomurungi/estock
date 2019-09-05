<?php
if(isset($_POST['submit'])){
	if(isset($_POST['opt'])){
		$d = date('Y-m-d');
		
		if(isset($_POST['milligrams'])){
			$milligrams = $_POST['milligrams'];
		}
		else{
			$milligrams = NULL;
		}
		if(isset($_POST['dept'])){
			$dep = $_POST['dept'];
		}
		else{
			$dep = 0;
		}
		$val = $_POST['opt'];
		include "connection.inc.php";
		$sql = mysqli_query($conn,"SELECT * FROM emptyprice WHERE quantities = '$milligrams'");
		while($row = mysqli_fetch_array($sql)){
			$id = $row['id'];
			$pricevalue = $row['pricevalue'];
			$shellprice = $row['shellprice'];
			$shellplusbottle = $row['shellplusbottle'];
			
		}
		
		if($val ==1){
			$bottleorder = $_POST['bottleorder'];
			$t1 = $pricevalue * $bottleorder;
			
		$insert = mysqli_query($conn,"INSERT INTO recordempty(count,date,empty,bottleorder,
							   shellorder,bottleplusshell,bottletotal,shelltotal,bpstotal,dept
							   )VALUES('NULL','$d','$id','$bottleorder','0','0',
							   '$t1','0','0','$dep')");
		if($insert){  echo "<script> window.open('empty.php','_self'); </script>"; }
		}elseif($val==2){
			$shellorder = $_POST['shellorder'];
			$t2 = $shellorder * $shellprice;
		$insert = mysqli_query($conn,"INSERT INTO recordempty(count,date,empty,bottleorder,
							   shellorder,bottleplusshell,bottletotal,shelltotal,bpstotal,dept)VALUES('NULL','$d','$id','0','$shellorder','0','0','$t2','0','$dep')");
		if($insert){  echo "<script> window.open('empty.php','_self'); </script>"; }
		}elseif($val ==3){
			$bpsorder = $_POST['shellplusbottle'];
			$t3 = $shellplusbottle * $bpsorder;
		$insert = mysqli_query($conn,"INSERT INTO recordempty(count,date,empty,bottleorder,
							   shellorder,bottleplusshell,bottletotal,shelltotal,bpstotal,dept
							   )VALUES('NULL','$d','$id','0','0','$bpsorder',
							   '0','0','$t3','$dep')");
		if($insert){ /*echo "<script> alert('success'); </script>";*/ echo "<script> window.open('empty.php','_self'); </script>"; }	
		}
		else{
			echo "<script> alert('failed'); </script>";
		}
	}
}
?>