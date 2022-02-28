<?php
session_start();
if(empty($_SESSION)){
  header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Profile</title>
</head>
<style>
          body{
    margin: 0;
    font-size: .9rem;
    font-weight: 400;
    line-height: 1.6;
    text-align: left;
    width: 100%;
    height:100vh;
    overflow: hidden;
    background-image: radial-gradient(circle, #5c0067 0%, #00d4ff 100%);

}
    div {
  margin-top: 40px;
  margin-bottom: 40px;
}
    button{
        font-size: .9rem;
        margin-top: 20px;
        margin-bottom: 0px;
        color:white;
        background-color: black;

}
    
   </style>
   <body>
<?php require '<partials/nav2.php'?>
      <?php
      include("connection.php");
      ?>
    <div class="div">
      <form action="changepass.php" method="post">
        <br> &nbsp Password &nbsp
         <button type="submit" class="btn btn-primary bg-white text-dark my-2"><a href="changepass.php">Update</a></button> <br> <br>
      </form>
      <form action="changeemail.php" method="post">
        <br> &nbsp Email &nbsp
         <button type="submit" class="btn btn-primary bg-white text-dark my-2"><a href="changeemail.php">Update</a></button> <br> <br>
      </form>
      <form action="changenumber.php" method="post">
        <br> &nbsp Number &nbsp
         <button type="submit" class="btn btn-primary bg-white text-dark my-2"><a href="changenumber.php">Update</button> <br> <br>
      </form>
      <form action="changegender.php" method="post">
        <br> &nbsp Gender &nbsp 
          <button type="submit" class="btn btn-primary bg-white text-dark my-2"> <a href="changegender.php">Update</button> <br> <br>
      </form>
    </div>
</body>
</html>