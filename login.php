<?php include('server2.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style2.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <title>Log-In</title>
  </head>

  <body>
    <div class="box">
      <div class="front-image">
        <img src="img/crptologo2.jpg" class="cryillus" style="width: 100%;border-bottom-left-radius: 25px;border-top-left-radius: 25px;" />
      </div>
      <div class="content">
        <form class="login" method="post" action="login.php">
        
        <?php if (@$_GET['registered'] == 'true') include('success.php')?>
         <?php include('errors.php'); ?>
          <h1>LOG IN</h1>
          <label for="Email">Enter Email Id</label>
          <input type="text" id="email" placeholder="Enter your email" name="email"/>
          <label for="password"> Enter Password</label>
          <input type="password" id="password" placeholder="Enter Password" name="password" />

          <button
            type="submit"
            class="btn" name="login_user"
            id="login"
          >Log-In</button>
          <p id="auth">Don't Have an account? <a href="register.php">Register</a></p>
        </form>
      </div>
    </div>
  </body>
</html>
