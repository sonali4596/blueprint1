<?php 
include("dbconnnection.php");

$get_the_state = mysqli_query($db,"SELECT `short_state`, `state_name` FROM `state` ");
$state=array();
$short_state=array();

while($fetch_data=mysqli_fetch_assoc($get_the_state)){
    $state[]=$fetch_data['state_name'];
    $short_state[]=$fetch_data['short_state'];
}
$get_the_country = mysqli_query($db,"SELECT  `country` FROM `country` ");
$country=array();

while($fetch_data=mysqli_fetch_assoc($get_the_country)){
    $country[]=$fetch_data['country'];
    
}
$countcountry=count($country);
$short_statecount=count($short_state);






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
   <link rel="stylesheet" href="form2.css"> 
</head>
    <body>
        <h1>Enter the details of festival of union</h1>
        <form action="southfood_dataentrytodb.php" enctype="multipart/form-data" method="post">
            <div class="main">
            <div class="name">
                <label>Name</label><br/>
                <input type="text" placeholder="Name of The Place" name='name'/>
            </div>
            <div>
                <label>country</label>
                <select name="country">
                
                <option value=" ">country</option>
                    <?php
                    for($i = 0; $i <=$countcountry ; $i++)
                    {
                        echo "<option value='".$country[$i]."'>".$country[$i]."</option>";
                    }
                    ?>
                
                </select> 
          </div> 
        <div>
                <label>State</label><br/>
            <select name="state"  id="stateid">
                
                <option value=" ">state</option>
                    <?php
                    for($i = 0; $i <=$short_statecount; $i++)
                    {
                        echo "<option value='".$short_state[$i]."'>".$state[$i]."</option>";
                    }
                    ?>
                
                </select> 
                
            </div><!--<div>
                <label>District</label><br/>
                <select id="districtf" name="district">
                    <option value=" ">District</option>
                </select>
            </div><div>
                <!--<label>reviews</label><br/>
                <input type="text" placeholder="Name of The Place" name='reviews'/>
            </div>--><br>
            <br><div>
                <label>description</label><br/>
                <textarea placeholder="Description" name="description"></textarea>
            </div><!--<div>
                <label>opendays</label><br/>
                <input type="text" placeholder="opendays" name='opendays'/>
            </div><div>
                <!--<label>closedays</label><br/>
                <input type="text" placeholder="closedays" name='closedays'/>
            </div><div>
                <!--<label>date_existance</label><br/>
                <input type="text" placeholder="date_existance" name='date_existance'/>
            </div><div>
                <!--<label>built_buy</label><br/>
                <input type="text" placeholder="built_buy" name='built_buy'/>
            </div>-->
           <!-- <div>
            <label>place</label><br/>
                <input type="text" placeholder="place" name='place'/>
            </div>-->
            <div>
                <label>	image</label><br/>
                <input type="file" placeholder="upload" name='image'/>
            </div>
            <div>
                <button type="submit" name="submit">submit</button>
            </div>
            </div>
        </form>
    
    <script type="text/javascript">
        $("#stateid").change(function(){
            var state=$(this).val();
            var district=new XMLHttpRequest();
            district.open("get","district.php?st="+state,true);
            district.send();
            district.onreadystatechange=function(){
                if(this.readyState==4 && this.status==200){
                    var except=JSON.parse(district.responseText);
                    var lenght=except.length;
                     $("#districtf").html("<option value=''>District</option>");
                    for(var i=0;i<lenght;i++){
                        $("#districtf").append("<option value='"+except[i]+"'>"+except[i]+"</option>");
                    }
                   }else{
                        if(this.readyState==0 || this.readyState==1 || this.readyState==2 || this.readyState==3){
                            
                        }else{
                            alert("something Went Wrong");
                        }
                   }
            };
            
            }) 
        
        
    
        
        
        
        </script>
    </body>
</html>