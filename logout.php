<?php
/*
can logout of any sedssion and terminate it;
*/
session_start();
session_destroy();
header('Location:index.php');
echo "<script>window.open('index.php','_self');</script>";

?>