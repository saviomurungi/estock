<?php
if(isset($_POST['clear']))
{
	$val = $_POST['clear'];
	include "connection.inc.php";
	$sql = mysqli_query($conn,"UPDATE recordempty SET dept='0' WHERE count = '$val' ");
	if($sql){
?>
<script type="text/javascript">
	alert("Debt has succesfully been cleared");
</script>
<?php		
		header('Location: empty.php');
	}
}

?>