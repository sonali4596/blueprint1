<?php
session_start();
if(!isset($_SESSION['login_name'])){
   header("location: ");
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
   <link rel="stylesheet" href="union1.css"> 
</head>
<body>
    <div class="touristplace">
        <div class="sa124413112018">
            <div class="sa030814112018">
                <!--upper div-->
            
                <div class="upperdiv">
                    <div class="button">
                        <button class="username"><?php echo $_SESSION['login_name'] ?></button>
                        <button class="logout">Log Out</button>
                    
                    </div>
                      <div class="list_directions">
                            <div class="sa032114112018 ">
                                <div class="touristplaces">
                                    <a href="uniontourist.php" style="type:none">Tourist Places</a>
                                </div>
                            </div>
                            <div class="sa032214112018">
                                <div class="food">
                                    <a href="unionfood.php">Food</a>            
                                </div>
                            </div>
                            <div class="sa032314112018">
                                <div class="festival">
                                    <a href="unionfestival.php">Festival</a>            
                                </div>
                            </div>
                            
                            
                         
                      </div> 
                      
                      
                  
                
                </div>
                
                
                <div class="slideshow1">
                    <h4>Tourist Places</h4>
                <div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                <img src="imagesslideshowredirection/union/tourist1.jpg" style="width:100%">
                <div class="text">taj mahal</div>
                </div>

                <div class="mySlides fade">
                
                <img src="imagesslideshowredirection/union/tourist2.jpg" style="width:100%">
                <div class="text">red fort</div>
                </div>

                <div class="mySlides fade">
                <img src="imagesslideshowredirection/union/tourist3.jpg" style="width:100%">
                <div class="text">shimla</div>
                </div>
                </div>              
                </div>
                
                 <div class="slideshow2">
                     <h4>Food</h4>
                <div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                <img src="imagesslideshowredirection/union/food1.jpg" style="width:100%">
                
                </div>

                <div class="mySlides fade">
                <img src="imagesslideshowredirection/union/food2.jpg" style="width:100%">
                </div>

                <div class="mySlides fade">
                <img src="imagesslideshowredirection/union/food3.jpg" style="width:100%">
                <div class="text">shimla</div>
                </div>
                </div>              
                </div>
                
                <div class="slideshow3">
                    <h4>Festival</h4>
                <div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                <img src="imagesslideshowredirection/union/festival1.jpg" style="width:100%">
                <div class="text">taj mahal</div>
                </div>

                <div class="mySlides fade">
                
                <img src="imagesslideshowredirection/union/festival2.jpg" style="width:100%">
                <div class="text">red fort</div>
                </div>

                <div class="mySlides fade">
                <img src="imagesslideshowredirection/union/festival3.jpg" style="width:100%">
                <div class="text">shimla</div>
                </div>
                </div>              
                </div>
                
                
                
               
               
            
            </div>
        
        
        
        
        </div>
    </div>

        <script>
            $(".slideshow1").mouseover(function(){
                if($(".mySlides").hasClass("fade")){
                    $(".mySlides").css("animation-play-state","paused");
                    $(".mySlides").removeClass("fade");
                }else{
                    $(".mySlides").css("animation-play-state","paused");
                    $(".mySlides").addClass("running");
                }
            });
        </script>

</body>
</html>