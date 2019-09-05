<?php
if(isset($_POST['value'])){
$var = $_POST['value'];
$sql = "SELECT brandid FROM filledbottles WHERE quantites = '$var'";
include "connection.inc.php";
$q = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_array($q)) {
    $brandid = $row['brandid'];
    $query = mysqli_query($conn,"SELECT brandname FROM brand WHERE brandid = '$brandid'");
    while ($rw = mysqli_fetch_array($query)) {
      $brandname = $rw['brandname'];
	}
?>
<option value="<?php echo $brandid; ?>"><?php echo $brandname; ?></option>
<?php
    
	}
}
?>
