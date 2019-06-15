<?php
session_start();

//initializing variables
$username = "";
$firstName = "";
$lastName = "";
$password = "";
$errors = array();

//connect to the Database
include ('util/db_connect.php')

//register user

if (isset($_POST['signup'])){
  //recieve all input values from the form
  $username = mysqli_real_escape_string($connect,$_POST['username']);
  $firstName = mysqli_real_escape_string($connect,$_POST['firstname']);
  $lastName = mysqli_real_escape_string($connect,$_POST['lastname']);
  $password = mysqli_real_escape_string($connect,$_POST['frontend_signup_password']);
  $password2 = mysqli_real_escape_string($connect,$_POST['frontend_signup_confirm_password']);

  //form validation: ensure that the form is correctly filled..
  //by adding (array_push()) corresponding error unto $errors array
  if(empty($username)){array_push($errors, "Username is required");}
  if (empty($firstName)){array_push($errors, "First Name is required");}
  if (empty($lastName)){array_push($errors, "Last Name is required");}
  if (empty($password)){array_push($errors, "Password is required");}
  if ($password != $password2){array_push($errors, "Please input matching passwords");}

  //first check the database to make sure a user does not already exist with the same Username
  $user_check_query = "SELECT * FROM employee WHERE username='$username'";
  $result = mysqli_query($connect, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if($user){
    if($user['username']===$username){ //if user exists
      array_push($errors, "Username already exist, please choose another username");
    }
  }

  //Finally, register user if there are no errors in the form
  if (count($errors)==0){
    //encrypt the password before saving in the database
    $passwordMD5 = md5($password);

    $query = "INSERT INTO employee (firstname, lastname, username, password, passwordMD5) VALUES ('$firstName', '$lastName', '$username', '$password', '$passwordMD5')";

    mysqli_query($connect, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: dashboard.php');
  }
}

//Login User

if (isset($_POST['login'])){
  $username = mysqli_real_escape_string($connect, $_POST['username']);
  $password = mysqli_real_escape_string($connect, $_POST['password']);

  if (empty($username)){
    array_push($errors, "Username is required");
  }
  if (empty($password)){
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0){
    $passwordMD5 = md5($password);
    $query = "SELECT * FROM employee WHERE username ='$username' AND password = '$password'";
    $results = mysqli_query($connect, $query);
    if (mysqli_num_rows($results) == 1){
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: dashboard.php');
    }else{
      array_push($errors, "Wrong useername/password combination");
    }
  }
}
?>
