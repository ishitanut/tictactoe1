<?php
session_start();
$showAlert =false;
$showError =false;
$existsql="";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    include("connection.php");
    $name=$_POST["name"];
    $email=$_POST["email"];
    $existsql="SELECT * FROM registeration WHERE name='$name'";
    $res=mysqli_query($conn,$existsql);
    $num=mysqli_num_rows($res);
    if($num < 1)
    {
        $showError ="Username Does not Exists";
    }
    else{
        $sql="UPDATE registeration SET email='$email' WHERE name='$name'";
        $result=mysqli_query($conn,$sql);
        if($result)
        {
             $showAlert=true;
        }

    }
}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Comaptible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Change Your Password </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel ="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php require '<partials/nav.php'?>
<?php
if($showAlert)
{
echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success</strong> Your Email is changed.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
if($showError)
{
echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error</strong> '.$showError.'
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
?>
<h1> Update Email </h1>
<form action="changeemail.php" method="post">
<div class="container">
    <label>Enter your Username</label><br>
    <input type="text" name="name" placeholder="Enter your Name"required/>
    <br>
    <label>New Email</label>
    <input type="text" name="email" placeholder="Enter New Email"required/>
    <div class="w3-center">
    <button type="submit" class="w3-btn w3-round">SUBMIT</button>
    </div>
</div>
</form>
</body>
</html>