
<?php include('server.php') ?>

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
    <title>Sign Up</title>
  </head>

  <body>
    <div class="box">
      <div class="front-image">
        <img
          src="img/cryptologo.jpg"
          class="cryillus"
          style="
            width: 100%;
            border-bottom-left-radius: 25px;
            border-top-left-radius: 25px;
          "
        />
      </div>
      <div class="content">
        <form class="register" method="post" action="register.php">
        <?php include('errors.php');?>
          <h1>SIGN UP</h1>
          
          <label for="text">Enter Name</label>
          <input
            type="text"
            id="username"
            placeholder="Enter your Name"
            name="username"
            value="<?php echo $username; ?>"
          />
          <label for="email">Enter Email Id</label>
          <input
            type="text"
            id="email"
            placeholder="Enter your email"
            name="email"
            value="<?php echo $email; ?>"
          />
          <label for="password"> Enter Password</label>
          <input
            type="password"
            id="password"
            placeholder="Enter Password"
            name="password"
          />

          <button
            type="submit"
            class="btn" name="reg_user"
            id="register"
          >
            REGISTER
          </button>
          <p id="auth">Already have an account? <a href="login.php">Log In</a></p>
         
        </form>
      </div>
    </div>
  </body>
</html>
