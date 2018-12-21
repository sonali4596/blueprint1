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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <link rel="stylesheet" href="tourist5.css"> 
    </head>
    <body>
    <div class="touristplace">
        <div class="sa124413112018">
            <div class="sa030814112018">
                <!--upper div-->
            
                <div class="upperdiv">
                    <div class="button">
                        <a href="profile.php"><button class="username"><?php echo $_SESSION['login_name'] ?></button></a>
                        <button class="logout">Log Out</button>
                    
                    </div>
                      <div class="list_directions">
                            <div class="sa032114112018 ">
                                <div class="northindia">
                                    <a href="northindiahtml.php" style="type:none">NORTH INDIA</a>
                                </div>
                            </div>
                            <div class="sa032214112018">
                                <div class="southindia">
                                    <a href="southindiahtml.php">SOUTH INDIA</a>            
                                </div>
                            </div>
                            <div class="sa032314112018">
                                <div class="eastindia">
                                    <a href="eastindiahtml.php">EAST INDIA</a>            
                                </div>
                            </div>
                            <div class="sa032414112018">
                                <div class="westindia">
                                    <a href="westindiahtml.php">WEST INDIA</a>            
                                </div>
                            </div>
                            <div class="sa032514112018">
                                <div class="unionterritories">
                                    <a href="unionhtml.php">UNION TERRITORIES</a>  
                                </div>
                            </div>
                         
                      </div> 
                      
                      
                  
                
                </div>
                
                
                <div class="slideshow1">
                    <h4>North India</h4>
                <div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                <img src="image/5bf87405d09c39.84092790.jpg" style="width:100%">
                <div class="text">taj mahal</div>
                </div>

                <div class="mySlides fade">
                
                <img src="imagesslideshowredirection/welcomepageslideshow/northfood.jpg" style="width:100%">
                <div class="text">red fort</div>
                </div>

                <div class="mySlides fade">
                <img src="imagesslideshowredirection/welcomepageslideshow/northfestival.jpg" style="width:100%">
                <div class="text">shimla</div>
                </div>
                </div>              
                </div>
                
                 <div class="slideshow2">
                     <h4>South India</h4>
                <div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                <img src="imagesslideshowredirection/welcomepageslideshow/southtourist.jpg" style="width:100%">
                
                </div>

                <div class="mySlides fade">
                <img src="imagesslideshowredirection/welcomepageslideshow/southfood.jpg" style="width:100%">
                </div>

                <div class="mySlides fade">
                <img src="imagesslideshowredirection/welcomepageslideshow/southfestival.jpg" style="width:100%">
                <div class="text">shimla</div>
                </div>
                </div>              
                </div>
                
                <div class="slideshow3">
                    <h4>East India</h4>
                <div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                <img src="imagesslideshowredirection/welcomepageslideshow/easttourist.jpg" style="width:100%">
                <div class="text">taj mahal</div>
                </div>

                <div class="mySlides fade">
                
                <img src="imagesslideshowredirection/welcomepageslideshow/eastfood.jpg" style="width:100%">
                <div class="text">red fort</div>
                </div>

                <div class="mySlides fade">
                <img src="imagesslideshowredirection/welcomepageslideshow/eastfestival.jpg" style="width:100%">
                <div class="text">shimla</div>
                </div>
                </div>              
                </div>
                
                <div class="slideshow4">
                    <h4>West India</h4>
                <div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                <img src="imagesslideshowredirection/welcomepageslideshow/westtourist.jpg" style="width:100%">
                <div class="text">taj mahal</div>
                </div>

                <div class="mySlides fade">
                
                <img src="imagesslideshowredirection/welcomepageslideshow/westfood.jpg" style="width:100%">
                <div class="text">red fort</div>
                </div>

                <div class="mySlides fade">
                <img src="imagesslideshowredirection/welcomepageslideshow/westfestival.jpg" style="width:100%">
                <div class="text">shimla</div>
                </div>
                </div>              
                </div>
                
                <div class="slideshow5">
                    <h4>Union territories</h4>
                <div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                <img src="imagesslideshowredirection/welcomepageslideshow/uniontourist.jpg" style="width:100%">
                <div class="text">taj mahal</div>
                </div>

                <div class="mySlides fade">
                
                <img src="imagesslideshowredirection/welcomepageslideshow/unionfood.jpg" style="width:100%">
                <div class="text">red fort</div>
                </div>

                <div class="mySlides fade">
                <img src="imagesslideshowredirection/welcomepageslideshow/unionfestival.jpg" style="width:100%">
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