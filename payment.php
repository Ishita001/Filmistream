<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconnect.php';

    $cardname = $_POST["name"];
    $cardnum = $_POST["number"];
    $email = $_POST["email"];
    $cardex =  $_POST["month"];
    $cardye = $_POST["year"];


    $exists=false;
    if($exists==false){
      $sql = "INSERT INTO `payment` (`cardname`, `cardnum`, `card ex month`, `card exp year`, `dt`) VALUES ('$cardname', '$cardnum', '$cardex', '$cardye', current_timestamp())";

    $result = mysqli_query($conn, $sql);
        if ($result){
               $showAlert = true;

        }
    }
    else{
        $showError = true ;
    }
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="payment.css" type="text/css">
    <title>Payment!</title>
  </head>
  <body>
    <?php require "header.php" ?>
    <?php
    if($showAlert){
    echo '<div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Payment Successfull!!</h4>
    <p> you can now subscribe</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger" role="alert">
    <h4 class="alert-heading">Payment UnSuccessfull!!</h4>
    <p> Passwords do not match</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>
    <div class="payment-box">
      <form action="/WT/payment.php" method="post">
        <h1 class="text-center">Payment</h1>
        <div class="form-group">
          <label for="name">Payer name</label><br>
          <input type="text" class="form-control" id="username" name="name" placeholder="Enter Name">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
          <label for="cardnum">Card Number</label>
          <input type="password" class="form-control" id="number" name="number"  placeholder="1234-1234-1234-1234">
        </div>
        <div class="div1">
          <label for="cardex">Card Expiry Month</label>
          <input type="month" class="form-control" id="month" name="month" placeholder="MM">
        </div>

        <div class="div1">
            <label for="cardye">Card Expiry Year</label>
            <input type="year" class="form-control" id="year" name="year" placeholder="yyyy">

        </div>
        <div class="div1">
            <label for="cardcvc">Card CVC</label>
            <input type="cvc" class="form-control" id="CVC" placeholder="cvc" >

        </div>

        <button type="button" class="btn btn-primary col-md-4">Pay</button>
          <a href= "mainPage.php">
         <button type="button" class="btn btn-primary col-md-4">Close</button>
         </a>
     </form>
   </div>

</body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
