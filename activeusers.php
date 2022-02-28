<?php 
session_start();
if(empty($_SESSION)){
  header('location:Register.php');
}else{
}
$name = $_SESSION['name'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Profile</title>
</head>
<body>
    <style>
        body{
            background-image: radial-gradient(circle, #5c0067 0%, #00d4ff 100%);
        }
        </style>
<?php require '<partials/nav.php'?>

  <!-- <div class="container-fluid text-dark">
    <div class="row content " style="height:515px">
    <div class="h-100 col-sm-3 sidenav bg-light"> -->
        

      
      <?php
        include("connection.php");
        $page = $_SERVER['PHP_SELF'];
        $sec = "30";
        header("Refresh: $sec; url=$page");
        echo "<br>"."ONLINE PLAYERS -";
        $sql = "SELECT name, score FROM registeration WHERE status = 'online'";
        $result = mysqli_query($conn,$sql);
        if ($result->num_rows > 0) {

          while($row = $result->fetch_assoc()) {
            echo  "<br>".$row["name"]." - ";
            echo $row["score"];
          }
        } else {
          echo "No Players Online";
        }

        echo "<br>"."<br>"."<br>"."OFFLINE PLAYERS -";

        $sql = "SELECT name, score FROM registeration WHERE status = 'offline'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

          while($row = $result->fetch_assoc()) {
            echo  "<br>".$row["name"]." - ";
            echo   $row["score"] ."<br>";
          }
        } 
        //else {
          //echo "No Players Online";
        //}
        $conn->close();
        ?>
        </body>
        </html>