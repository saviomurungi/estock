<?php
//connection variables alter on serverchange
// $servername = "sql300.byethost7.com"; //add a protocal you are using like https:// or http:// on live server
// $username = "b7_24274935";
// $password ="savioapuli256";
// $database ="b7_24274935_dailystockkeep";
$servername = "localhost";
$username =  "root";
$password = "";
$database = "dailystockkeep";

//connection variable to call on every database  connection
$conn = mysqli_connect($servername,$username,$password,$database);
//mysql_select_db("dailystockkeep",$database);
//if($conn){
//    echo "vwala";
//}
//else{
//    echo "failed to connect to the datbase";
//}
 
?>
