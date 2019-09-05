<?php
//to be included into the select tag on the empty shell table
include "connection.inc.php";
$mills = "SELECT * FROM emptyprice ";
$query = mysqli_query($conn,$mills);
while($result = mysqli_fetch_array($query)){
	$quantityid = $result['id'];
	$mills = $result['quantities'];

	$nq = mysqli_query($conn,"SELECT * FROM quantites WHERE quantityid = '$mills'");
		while($row = mysqli_fetch_array($nq)){
			$qty=$row['mills'];
		
		}
	
?>
	<option value="<?php echo $mills;?>"><?php echo $qty;?></option>	
<?php	
	}

?>