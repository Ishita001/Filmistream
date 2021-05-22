<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconnect.php';

    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $email =  $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    $exists=false;
    if(($password == $cpassword) && $exists==false){
        $sql =" INSERT INTO `users` (`username`, `password`, `email`, `phone`, `address`, `dt`) VALUES ('$username', '$password', '$email', '$phone', '$address', current_timestamp())";
    $result = mysqli_query($conn, $sql);
        if ($result){
               $showAlert = true;

        }
    }
    else{
        $showError = "Passwords do not match";
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">




    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="SignIn.css" type="text/css">
    <title>SignIn</title>
  </head>
  <body>
    <?php require "header.php" ?>
    <footer>
    <?php
    if($showAlert){
    echo '<div class="alert alert-success" role="alert">
    <h4 class="alert-heading">SignIn Successfull!!</h4>
    <p> you can now subscribe</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger" role="alert">
    <h4 class="alert-heading">SignIn UnSuccessfull!!</h4>
    <p> Passwords do not match</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>

    <div class="signIn-box">
     <form action="/WT/signIn.php" method="post">
      <h1 class="text-center">SignIn</h1>
      <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" name="username">

      </div>
      <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password">
      </div>
      <div class="form-group">
          <label for="cpassword">Confirm Password</label>
          <input type="password" class="form-control" id="cpassword" name="cpassword">

      </div>
      <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp">

      </div>
      <div class="form-group">
          <label for="phone">Phone</label>
          <input type="text" class="form-control" id="phone" name="phone">

      </div>
      <div class="form-group">
          <label for="address">Address</label>
          <input type="text" class="form-control" id="address" name="address">

      </div>

      <button type="submit" class="btn btn-primary col-md-4">Sign In</button>
      <a href="/WT/subscription.php" class="btn btn-primary col-md-4">Next</a>
   </form>
 </div>
</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
