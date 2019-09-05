<?php
if(isset($_GET['clear']))
{
	$val = $_GET['clear'];
	include "connection.inc.php";
	$sql = mysqli_query($conn,"UPDATE dailyrecord SET dept='0' WHERE count = '$val' ");
	if($sql){
?>
<script type="text/javascript">
	alert("Debt has succesfully been cleared");
</script>
<?php		
		header('Location: client_order.php');
	}
}

?>