<?php
session_start();
if(empty($_SESSION['loggedin'])){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Comaptible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title> TIC TAC TOE </title>
    <title>Welcome - <?php $_SESSION['name']?></title>
  </head>
  <?php require '<partials/nav2.php'?>
  <body>
  
    <div class="container my-3">
    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Welcome - <?php echo $_SESSION['name'] ?></h4>
      <p>Hope you are good. You are logged in as <?php echo $_SESSION['name']?></p>
      <hr>
      <button onclick="myFunction()">Play</button>
      <script>
function myFunction() {
  location.replace("ticc.php");
}
</script>
    </div>
  </div>
</body>
</html>