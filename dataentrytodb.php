<?php
include("dbconnnection.php");

if(isset($_POST['submit'])){
    $country=isset($_POST['country'])?mysqli_real_escape_string($db,$_POST['country']):null;
   // $place=isset($_POST['place'])?mysqli_real_escape_string($db,$_POST['place']):null;
    $state_id=isset($_POST['state'])?mysqli_real_escape_string($db,$_POST['state']):null;
   // $city=isset($_POST['district'])?mysqli_real_escape_string($db,$_POST['district']):null;
   // $reviews=isset($_POST['reviews'])?mysqli_real_escape_string($db,$_POST['reviews']):null;
    $description=isset($_POST['description'])?mysqli_real_escape_string($db,$_POST['description']):null;
   // $opendays=isset($_POST['opendays'])?mysqli_real_escape_string($db,$_POST['opendays']):null;
   // $closedays=isset($_POST['closedays'])?mysqli_real_escape_string($db,$_POST['closedays']):null;
   // $built_buy=isset($_POST['built_buy'])?mysqli_real_escape_string($db,$_POST['built_buy']):null;
   // $date_existance=isset($_POST['date_existancedate_existance'])?mysqli_real_escape_string($db,$_POST['date_existance']):null;
    $image=$_FILES['image'];
    $name=isset($_POST['name'])?mysqli_real_escape_string($db,$_POST['name']):null;
    
    $filename=$image['name'];
    $file_temporary_file=$image['tmp_name'];
    $file_error=$image['error'];
    $file_explode=explode('.',$filename);
    $filetypeof=strtolower(end($file_explode));
    if($file_error===0){
        $file_newname=uniqid('',true).".".$filetypeof;
        $file_newtarget="image/".$file_newname;
        move_uploaded_file($file_temporary_file,$file_newtarget);
        mysqli_query($db,"INSERT INTO `tourist_place`(`id`, `image`, `description`, `name`, `state_id`, `country`) VALUES (NULL,'$file_newtarget','$description','$name','$state_id','$country')");
        echo" you have entered successfully" ;
        header('location: http://'.$_SERVER['HTTP_HOST']."/blueprint/form.php");
    }else{echo"hey";}
}