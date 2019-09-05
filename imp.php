<?php
if(isset($_POST['value'])){
	$v = $_POST['value'];
	if($v == 1){
?>
	<input type="number" required min="0" placeholder="number of bottles" class="form-control form-control-sm" name="bottleorder">
<?php		
	}
	if($v == 2){
?>
	<input type="number" required min="0" placeholder="number of shells" class="form-control form-control-sm" name="shellorder">

<?php		
	}
	if($v == 3){
?>
	<input type="number" required min="0" placeholder="number of crates" class="form-control form-control-sm" name="shellplusbottle">

<?php		
	}
}
?>