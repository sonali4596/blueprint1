<!DOCTYPE html>
<html>
<head>
<title>BluePrint</title>
 <meta charset="utf-8" >
  <meta name="author" content="sonali sinha"/>
  <meta name="description" content="sign up/login page"/>
  <meta name="viewport" content="width=device-width, initial-scale" />
   <link rel="stylesheet" href="blueprint4.css"> 
    <script>
        function clicks(){
            document.getElementsByClassName("login1")[0].click();
        }
    </script>
</head>
<body>
 <div class="main">
     <div class="upperdiv">
         <h1>WELCOME TO BLUEPRINT OF INDIA</h1>
            <button  class="login1" onclick="document.getElementById('id01').style.display='block'" >Login</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="login.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>
      <div style="text-align:center;color:red;font-size:19px;">
        <?php 
          session_start();
          if(isset($_SESSION['error'])){
              echo $_SESSION['error'];
              echo "<script>
                clicks()
              </script>";
              if(basename($_SERVER["PHP_SELF"]) != $_SESSION['error']){
                  unset($_SESSION['error']);
              }
          }
          ?>
      </div>
    <div class="container">
      <label ><b>Email</b></label>
      <input type="text"  name="email"placeholder="Enter email" name="uname" required>

      <label ><b>Password</b></label>
      <input type="password"  name="password" placeholder="Enter Password" name="psw" required><br>
        
      <button type="submit" name="submit" class="login">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

        <!--   <button type="button"  class="signup1">SIGNUP</button>-->
         
         
     </div>
     
     
     </div>
     
     <div class="lowerdiv">
         <div class="signup">
             <form action="signup.php" method="post" onsubmit="return validate_signup()" enctype="application/x-www-form-urlencoded" name=signupform>
                 <div class="sa153110112018">
                     <div class="">
                     <h2>Sign Up</h2><br> <br></div>
                     <p>Please fill this form to create an account</p>
                     <hr>
                     
                    <tr>
                     <th><label for="name"><b>Name</b></label></th><br>
                     
                     <td><p id="firstname_validate"></p>
                         <input type="text" name="firstname" placeholder="firstname" required ></td>
                     <td><input type="text" name="lastname" placeholder="lastname" required><p id="lastname_validate"></p><br>
                     </td>
                   </tr>
                 
                   <label for="email"><b>Email</b></label><br>
                   <input type="email" name="email" placeholder="abcd@gmail.com" required><p id="email_validate"></p><br>
                 
                   <label for="phoneno"><b>Phone Number</b></label><br>
                   <input type="text"  name="phoneno" placeholder="1234567890" maxlength="10" pattern="[1-9]{1}[0-9]{9}" ><p id="phoneno_validate"></p><br>
                   <label for="password"><b>Password</b></label><br>
                   <input type="password" name="password" placeholder="123as@a123" required><p id="password_validate"></p><br>
                   <label for="confirm password"><b>Confirm password</b></label><br>
                   <input type="password" name="confirm_password" required><p id="confirm_password_validate"></p>
                   <table>
                       <tr>
                         <td><input type="checkbox" name="rememberme" ></td>
                         <td>Remember Me</td>
                       </tr>
                       
                      <tr>
                          <td><input type="checkbox" name="terms_and_condition" required><p id="terms_validate"></p>
                          </td>
                          <td>Agree to our <a href="#terms_condition">Terms Condition</a>.</td><br><br>
                     </tr>
                  </table>
                     <br>
                  <div class="sa153810112018">
                      <button type="reset" class="reset">Reset</button><br>
                      <button type="button" class="cancelbtn">Cancel</button>
                      <button type="submit" name="submit" class="submitbtn">SIGN UP</button>
                     
                  </div>
              </div>
             </form>
             
         

     
         </div>
     </div>
         <div class="india_image">
         <img src="headerimages/incredible-india-and-indian-culture-1-638.jpg">
    
    </div>
    
    <div>
        <h3> insert the value into db</h3>
        <a href="northentertainment_form.php">north entertainment form</a><br>
        <a href="form.php">north tourist form</a><br>
        <a href="northfestival_form.php">north festival form</a><br><a href="northfood_form.php">north entertainment form</a><br>
        <a href="southfestival_form.php"> south festival form</a><br>
        <a href="southtourist_form.php">south tourist form</a><br>
        <a href="southfood_form.php">south food form</a><br>
        <a href="southentertainment_form.php">south entertainment form</a><br>
        <a href="easttourist_form.php">east tourist form</a><br>
        <a href="eastfood_form.php">east food form</a><br>
        <a href="eastfestival_form.php">east festival form</a><br>
        <a href="westtourist_form.php">west tourist form</a><br>
        <a href="westfood_form.php">westfood form</a><br>
        <a href="westfestival_form.php">west festival form</a><br><a href="westentertainment_form.php">west entertainment form</a><br>
        <a href="unionfood_form.php">union food form</a>
        <br><a href="unionfestival_form.php">unionfestivalform</a><br>
        <a href="uniontourist_form.php">uniontourist form</a><br>
    </div>
     
    <script>
    function validate_signup(){
        var firstname=document.forms["signupform"]["firstname"].value;
        var lastname=document.forms["signupform"]["lastname"].value;
        var email=document.forms["signupform"]["email"].value;
        var phoneno=document.forms["signupform"]["phoneno"].value;
        var password=document.forms["signupform"]["password"].value;
        var confirm_password=document.forms["signupform"]["confirm_password"].value;
        var terms=document.forms["signupform"]["terms_and_condition"].value;
        if(firstname=="")
            {document.getElementById("firstname_validate").innerHTML="please fill the first name ";
             return false;
             }
        if(lastname=="")
            {document.getElementById("lastname_validate").innerHTML="please fill the last name ";
             return false;
             }
        if(email=="")
            {document.getElementById("email_validate").innerHTML="please fill the email ";
             return false;
             }
         
   
        if (email.indexOf("@", 0) < 0)                 
            { document.getElementById("email_validate").innerHTML="please fill the valid email";
            return false; 
            } 
   
        if (email.indexOf(".", 0) < 0)                 
            { document.getElementById("email_validate").innerHTML="please fill the valid email";
            return false; 
            } 
        
        if (phoneno == "")                           
            {document.getElementById("email_validate").innerHTML="please fill the phoneno"; 
            return false; 
            }
         
        if (password == "")                           
            {document.getElementById("password_validate").innerHTML="please fill the password"; 
            return false; 
            }
         
        if (confirm_password== "")                           
            {document.getElementById("confirm_password_validate").innerHTML="please fill the password"; 
            return false; 
            }
         
        if (!(password==confirm_password))                           
            {document.getElementById("confirm_password_validate").innerHTML="password is not matching"; 
            return false; 
            }
        
        }
        // Get the modal
var modal = document.getElementById('modallogin');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
    
    </script>
    
</body>
</html>