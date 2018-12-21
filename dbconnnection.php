<?php
 //Establishing connection with the database
$server="localhost";
$username='root';
$password='';
$database='blueprint';

$db=mysqli_connect("$server","$username","$password");
mysqli_select_db($db,$database);
?>