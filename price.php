<?php
include "connection.inc.php";
//price snipet
if(isset($_POST['brand'])){
$brand = $_POST['brand'];
$milz = $_POST['qty'];
$sql= "SELECT pricevalue FROM filledbottles WHERE brandid='$brand' AND quantites='$milz' ";
$query= mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($query))
{
	$price = $row['pricevalue'];
}
?>
<span class="label label-danger">price</span>
<input type="text"class="form-control form-control-sm "  value="<?php echo $price; ?>"  readonly="readonly" placeholder="price read only">

<?php
     
}

?>