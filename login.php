<?php
//$conn = mysqli_connect('localhost',"root","","dailystockkeep");
include_once "connection.inc.php";

/*
login scripts for the user
database dependent database must contain
user table with username , user_email and password
*/

session_start();
if(isset($_POST['login'])){
    
	$email = $_POST['email'];
	$password = $_POST['password'];
	
    //include "connection.inc.php";
	$sql = "SELECT username FROM user WHERE user_email = '$email' AND password = '$password'";
	$query = mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($query) != 0){
		$row = mysqli_fetch_array($query);
		$username = $row['username'];
		$_SESSION['USER']['ADMIN'] = $username;
		
		echo "<script>window.open('dash_home.php','_self');</script>";
		
		}
		else{
?>
		<div class="alert alert-danger ">
			Email or password incorrect
			<button type="button" data-dismiss="alert" class="close"  aria-label="Close">
		 <span aria-hidden="true">&times;</span>
			</button>
		</div>
<?php
		}

}


?>