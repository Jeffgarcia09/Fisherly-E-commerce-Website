<?php 
session_start();

   include("connection.php");
   include("function-sign.php");


   if($_SERVER['REQUEST_METHOD'] == "POST")
   {
      //something was posted
      $email = $_POST['email'];
      $password = $_POST['password'];

      if(!empty($email) && !empty($password) && !is_numeric($email) )
      {

         //save to database
         $user_id = random_num(20);
         $query = "insert into users (user_id,email,password) values ('$user_id','$email','$password')";

         mysqli_query($con, $query);

         header("Location: signin.php");
         die;
      }else
      {
         echo "Please enter some valid information!";
      }
   }
?>



<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>

      <meta charset="utf-8">
      <title>Fisherly| Sign-up</title>
      <link rel="stylesheet" href="css/signup.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <form></form>
      <div class="wrapper">
      	<img src="img/logo-fish1.png" class="logo2">
         <div class="title-text">

            <div class="title signup">
               Signup Form
            </div>
         </div>
     
         <div class="form-container">

            <div class="form-inner">

    <form method="post" class="signup">
                  <div class="field">
                     <input type="text" name="email" placeholder="Email Address" required>
                  </div>
                  <div class="field">
                     <input type="password" name="password" placeholder="Password" required>
                  </div>
                  <div class="field">
                     <input type="password" name="password" placeholder="Confirm password" required>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Signup">

                  </div>
                                    <div class="signup-link">
                     Already a member? <a href="signin.php">Login now</a>
                  </div>
               </form>
            </div>
         </div>
      </div>
</form>





      <script>
         const loginText = document.querySelector(".title-text .login");
         const loginForm = document.querySelector("form.login");
         const loginBtn = document.querySelector("label.login");
         const signupBtn = document.querySelector("label.signup");
         const signupLink = document.querySelector("form .signup-link a");
         signupBtn.onclick = (()=>{
           loginForm.style.marginLeft = "-50%";
           loginText.style.marginLeft = "-50%";
         });
         loginBtn.onclick = (()=>{
           loginForm.style.marginLeft = "0%";
           loginText.style.marginLeft = "0%";
         });
         signupLink.onclick = (()=>{
           signupBtn.click();
           return false;
         });
      </script>

   </body>

</html>