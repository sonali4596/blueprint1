<?php 
include("dbconnnection.php");
if(!isset($_SESSION['login_name'])){
    
    
}else{
}


 if(isset($_GET['id'])){
        $var=$_GET['id'];
        $get_the_fetch=mysqli_query($db,"SELECT `id`, `image`, `description`, `name`, `state_id`, `country` FROM `tourist_place` WHERE  `id`='$var'");
        $fetch=mysqli_fetch_assoc($get_the_fetch);
        $image=$fetch['image'];
        $name=$fetch['name'];
        $description=$fetch['description'];
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>BluePrint</title>
    <meta charset="utf-8" >
    <meta name="author" content="sonali sinha"/>
    <meta name="description" content="sign up/login page"/>
    <meta name="viewport" content="width=device-width, initial-scale" />
    <link rel="stylesheet" href="redirection8.css">
</head>
<body>
    <div class="sa043927112018">
        <div class="upperdiv">
        <div class="images">
            <img src="<?php echo $image; ?>">
            
            </div>
        
        </div>
         
        
        <div class="content">
            <p><?php echo $description?></p>
        </div>
        
        </div>
    
    
</body>
</html>