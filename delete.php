<?php
include("dbconnnection.php");
if(isset($_GET['id'])){
    $id=$_GET['id'];
    
    mysqli_query($db,"UPDATE `signup` SET `del`='1' WHERE `id`='$id'");
    header('location: http://'.$_SERVER['HTTP_HOST']."/blueprint/logout.php");
}