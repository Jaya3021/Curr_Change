<?php


// initializing variables
$password = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'project');

// LOGIN USER
if (isset($_POST['login_user'])) {
  $email = $_POST['email'];
  $password =  $_POST['password'];
 
 
  if ( empty($email) || empty($password)) {
    array_push($errors, "All fields are required");
}

if(count($errors)==0){

  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);
	$k=mysqli_num_rows($results);
   
  	if (mysqli_num_rows($results) == 1) {
  	  header('location: main.html');
  	}else {
  		array_push($errors, "Wrong email/password combination");
  	}
}
}

?>