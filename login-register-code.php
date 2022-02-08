<?php
	include('config.php');
// LOGIN USER

if (isset($_POST['lsubmit']))
 {
	$username = mysqli_real_escape_string($connection,$_POST['uname']);
	$password = mysqli_real_escape_string($connection,$_POST['password']);


		$query = "SELECT * FROM users WHERE name='$username' AND password='$password'";
		$results = mysqli_query($connection, $query);
		if (mysqli_num_rows($results) == 1) 
        {
			session_start();
			$_SESSION['username']=$username;
		
		  $_SESSION['success'] = "You are now logged in";
		  header('location: index.php');
		}
        else 
        {
			// array_push($errors, "Wrong username/password combination");
			header('location:login-register.php');
		}
 	 }
    ?>

  


<?php

// initializing variables
$errors = array(); 
// REGISTER USER
if (isset($_POST['rsubmit'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($connection, $_POST['uname']);
  $email = mysqli_real_escape_string($connection, $_POST['email']);
  $phone = mysqli_real_escape_string($connection, $_POST['phone']);
  $address = mysqli_real_escape_string($connection, $_POST['address']);
  $password = mysqli_real_escape_string($connection, $_POST['password']);
  $usertype = mysqli_real_escape_string($connection, $_POST['usertype']);
  $service = mysqli_real_escape_string($connection, $_POST['service']);
  $nameErr=$emailErr=$phoneErr=$addressErr=$passwordErr="";
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $sql = "SELECT * FROM users WHERE name='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($connection, $sql);
  $user = mysqli_fetch_assoc($result);
    
  if($username==""){
    echo"<alert>username cant be empty</alert>";
  }

  
  if ($user) { // if user exists
    if ($user['name'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }


  // Finally, register user if there are no errors in the form
else {
  	$password = $password;//encrypt the password before saving in the database

  	$query = "INSERT INTO users (name, email,phone,address,password,usertype,service) 
  			  VALUES('$username', '$email','$phone','$address','$password','$usertype','$service')";
  	$result=mysqli_query($connection, $query);
    
      if($result){
      header('location:login-register.php');
      }
  }

}
?>
