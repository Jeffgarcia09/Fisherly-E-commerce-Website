<?php 

session_start();

  include("connection.php");
  include("function-sign.php");


  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //something was posted
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!empty($email) && !empty($password) && !is_numeric($email))
    {

      //read from database
      $query = "select * from users where email = '$email' limit 1";
      $result = mysqli_query($con, $query);

      if($result)
      {
        if($result && mysqli_num_rows($result) > 0)
        {

          $user_data = mysqli_fetch_assoc($result);
          
          if($user_data['password'] === $password)
          {

            $_SESSION['user_id'] = $user_data['user_id'];
            header("Location: index.php");
            die;
          }
        }
      }
      
      echo '<script>alert("Wrong Email or Password!")</script>';
    }else
    {
      echo '<script>alert("Wrong Email or Password!")</script>';
    }
  }

?>





<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>

      <meta charset="utf-8">
      <title>Fisherly|Sign-In</title>
      <link rel="stylesheet" href="css/signup.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <form></form>
      <div class="wrapper">
      	<img src="img/logo-fish1.png" class="logo2">
         <div class="title-text">

            <div class="title login">

               Login Form
            </div>

         </div>
     
         <div class="form-container">

            <div class="form-inner">

               
   <form action="#" method="post" class="login">
                  <div class="field">
                     <input type="text" name="email" placeholder="Email Address" required>
                  </div>
                  <div class="field">
                     <input type="password" name="password" placeholder="Password" required>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Login">
                  </div>
                  <div class="signup-link">
                     Not a member? <a href="signup.php">Signup now</a>
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