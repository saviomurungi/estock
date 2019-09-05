<option value= "null" >select brand</option>
<?php
include "connection.inc.php";
//request processor file
if(isset($_POST['value'])){
	$val = $_POST['value'];
	//echo $val;
	$sql = "SELECT * FROM filledbottles WHERE quantites = '$val'";
	$query = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($query)){
		$brandid = $row['brandid'];
		$sql2 ="SELECT brandname FROM brand WHERE brandid = '$brandid' ";
			$query2 = mysqli_query($conn,$sql2);
				while($data = mysqli_fetch_array($query2)){
					$brandname = $data['brandname'];
?>
			<option value="<?php echo $brandid;?>"> <?php echo $brandname;?> </option>
<?php
					
				}
	}
}
?>