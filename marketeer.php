<?php
include "connection.inc.php";
$sql = "SELECT * FROM marketeer ";
$q = mysqli_query($conn,$sql);
while($row  = mysqli_fetch_array($q)){
	$id = $row['id'];
	$name = $row['MarkName'];
	$contact = $row['contact'];
	
?>
<option value="<?php echo $id; ?>" title="<?php echo $contact; ?>"> <?php echo $name; ?> </option>
<?php	
}

?>