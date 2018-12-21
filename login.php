<?php
session_start();
include("dbconnnection.php");
if (isset($_POST['submit'])) {
     $email = mysqli_real_escape_string($db,$_POST['email']);
     $password = mysqli_real_escape_string($db,$_POST['password']);
     $fetched_data = mysqli_query($db,"SELECT `id`, `firstname`, `lastname`,  `password` FROM `signup` WHERE `email`='$email' AND `del`='0'");
     if(mysqli_num_rows($fetched_data)!=0)
     {
        $separated_data=mysqli_fetch_assoc($fetched_data);
        if(password_verify($password,$separated_data['password'])){
            $firstname= $separated_data['firstname'];
            $lastname= $separated_data['lastname'];
            $id=$separated_data['id'];
            $_SESSION['aJGNBaVL_']=$id;
             $_SESSION['login_name'] = $firstname." ".$lastname;
         $_SESSION['login_user'] = $email;
         header('location: http://'.$_SERVER['HTTP_HOST']."/blueprint/touristhtml.php");
      }
     }else{
         $_SESSION['error']="password is wrong";
         header("location: blueprint.php");
        }
        
    
     }else{
echo "Your form is not submitted yet please fill the form and visit again";
}






   ?>