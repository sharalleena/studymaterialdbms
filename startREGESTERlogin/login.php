<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <title>login system!</title>
  </head>
  <body>
  <?php
  include 'conn.php';

  if(isset($_POST['submit'])){
      $username=$_POST['username'];
      $password=$_POST['password'];

      $username_search="select * from ad_register where username = '$username' ";
      $query=mysqli_query($con,$username_search);
      $username_count=mysqli_num_rows($query);
      if($username_count){
        $usernmae_pass = mysqli_fetch_assoc($query);
        $db_pass=$usernmae_pass['password'];
        $pass_decode=password_verify($password,$db_pass);
           if($pass_decode)
           {
            echo "login successful";
            ?>
            <script>
                location.replace("dash1.php");
            </script>
            <?php
           }
           else
            {
               echo "password incorrect or you have not registered before";
               ?>
            <script>
                location.replace("start.html");
            </script>
            <?php
               
            }
            
        }
        else{
            echo "invalid email";
        }
    
  }
?>
<div class="registration-page">
            <div class="form">
                <p ><font size="+4" color="#29b10e" font-style="oblique">log in</font> </p>
                 <form class="register-form" action="" 
                  method="POST">
                    <input type="text" name="username" placeholder="USERNAME"/>
                    <input type="password"name="password" placeholder="PASSWORD"/>
                    <button type="submit" class="button button2" name="submit" >Submit</button>
                </form>
            </div>
        </div>
  </body>
</html>
