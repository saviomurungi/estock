php<?php
if(isset($_POST['value'])){
	$pas = $_POST['value'];
	echo $pas;
	include "connection.inc.php";
	$query = mysqli_query($conn,"SELECT * FROM emptyprice WHERE quantities ='$pas'");
	while($row = mysqli_fetch_array($query)){
		$pricevalue = $row['pricevalue'];
		$shellprice = $row['shellprice'];
		$bottleplusshell = $row['shellplusbottle'];
	
	
?>
<td><?php echo $pricevalue; ?></td>
<td><?php echo $shellprice; ?></td>
<td><?php echo $bottleplusshell; ?></td>
<?php	
	}
}
?>