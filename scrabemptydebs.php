 <?php
if(isset($_GET['clear']))
{
	$val = $_GET['clear'];
	include "connection.inc.php";
	$sql = mysqli_query($conn," UPDATE recordempty SET dept='0' WHERE count = '$val' ");
	if($sql){
?>
<script>
	alert("sucessfuly cleared");
	window.open("dash_home.php","_self");
</script>
<?php		
		
	}
}

?>