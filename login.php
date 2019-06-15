<?php
  if(isset($_POST['username']) and isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `employee` WHERE username = `$username` and password = `$password`";

    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    $count = mysqli_num_rows($result);

    if($count == 1){
      $_SESSION['username'] = $username;
    }else{
      $msg = "Invalid Login Details.";
    }
  }

  if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    echo "Hello" . $username ."";
    echo "<a href = 'logout.php'>Log Out</a>";
  }else{}
?>
