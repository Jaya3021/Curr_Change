<?php


// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'project');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
 

   if(empty($password)){

 
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username && $user['email'] === $email) {
      array_push($errors, "Already registered, Please login.");
    }

    else if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    else if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }
}
  else if (empty($username) || empty($email) || empty($password)) {
  	array_push($errors, "All fields are required");
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  
  	header('location: login.php?registered=true');
  }
}



?>