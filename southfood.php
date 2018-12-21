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
   <link rel="stylesheet" href="southfood.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <div class="wrapper">
        <div class="sa214220112018">
            <div class="main">
                <div class="sa100621112018">
                    <div class="upper_div">
                        <div class="button">
                        <button class="username"><?php echo $_SESSION['login_name'] ?></button>
                        <button class="logout">Log Out</button>
                    
                    </div>
                    <div class="heading">
                    
                        <h1> Welcome To foods of south India  </h1>
                    </div>
                    </div>
                    <div class="sa153621112018">
                    <div class="lower_div">
                        <div class="sa153721112018">
                            <div class="Aa20181127243Av_"></div>
                            <div style="text-align:center;" class="Aa20181127238Av_"></div>
                        </div>
                    </div>     
                    </div>      
                </div>         
            </div>             
        </div>                  
    </div>
    <script type="text/javascript">
        
        var start=0
        var limit=6;
        var active="active";
    function set(a,b,c){
          var data=new XMLHttpRequest();
          data.open("get","data_retrive.php?start="+a+"&& limit="+b);
          data.send();
        data.onreadystatechange=function(){
            if(this.readyState==4 && this.status==200){
                $(".Aa20181127238Av_").html("<button style='border:1px solid grey;background-color:rgba(39,100,159,0.8);border-color:rgba(39,100,159,0.8);cursor:pointer;' class='Aa20181127229Ae_'>Load More</button>");
                
                $(".Aa20181127243Av_").append(data.responseText);
                
            }else{
                if(this.readyState==0 || this.readyState==1 || this.readyState==2 || this.readyState==3){
                    $(".Aa20181127238Av_").html("Please wait");
                    active="inactive";
                }else{
                    alert("smoething Went Wrong");
                    active="active"
                }
            }
        }
        
    }
        if(active="active"){
        active="inative";
            start=0;
            limit=6;
            set(start,limit,active);
        }
        
        $(".Aa20181127238Av_").click(function(){
           active="inactive";
            start=start+limit;
            limit=6;
            set(start,limit,active);
        });
    </script>
</body>
</html>

































