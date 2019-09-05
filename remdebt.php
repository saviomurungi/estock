<?php
if(isset($_GET['clear']))
{
	$val = $_GET['clear'];
	include "connection.inc.php";
	$sql = mysqli_query($conn,"UPDATE dailyrecord SET dept='0' WHERE count = '$val' ");
	if($sql){
		
?>
<script type="text/javascript" src="js/notify.min.js"></script>
 
  <!--table js-->
<!--    <script type="text/javascript" src="js/bootstable.js"></script>-->
<script type="text/javascript">
  function foo(){
        
$.notify("you are running  out of stock", "info",
        {showDuration: 400}
        
        );
      
   
   }

   // foo();
</script>
<script>
	
window.open("dash_home.php","_self");
</script>

<?php
	}
}

?>