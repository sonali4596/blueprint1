<?php
 
include("dbconnnection.php");

    if(isset($_POST['submit'])){
        echo "successfully registered";
        $firstname=isset($_POST['firstname'])?mysqli_real_escape_string($db,$_POST['firstname']):null;
        $lastname=isset($_POST['lastname'])?mysqli_real_escape_string($db,$_POST['lastname']):null;
        $email=isset($_POST['email'])?mysqli_real_escape_string($db,$_POST['email']):null;
        $phoneno=isset($_POST['phoneno'])?mysqli_real_escape_string($db,$_POST['phoneno']):null;
        $password=isset($_POST['password'])?mysqli_real_escape_string($db,password_hash($_POST['password'],PASSWORD_BCRYPT)):null;
        $password_confirm=isset($_POST['confirm_password'])?mysqli_real_escape_string($db,$_POST['confirm_password']):null;

                                if(password_verify($password_confirm,$password)){
        mysqli_query($db,"INSERT INTO `signup`(`id`, `firstname`, `lastname`, `phone`, `email`, `password`,`del`) VALUES (NULL,'$firstname','$lastname','$phoneno','$email','$password','0')");
                                    
                 header('location: http://'.$_SERVER['HTTP_HOST']."/blueprint/blueprint.php");               
                                }else{
                                        header('location: http://'.$_SERVER['HTTP_HOST']."/blueprint");
                                    }
    }           
?>