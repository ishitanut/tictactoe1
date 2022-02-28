 <?php
 session_start();
 
$login=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
  include("connection.php");
    $name=$_POST["name"];
    $pass=$_POST["pass"];
  $sql="SELECT * FROM `registeration` WHERE name='$name' && pass='$pass'";
  $result=mysqli_query($conn,$sql);
  $num=mysqli_num_rows($result);
  if($num==1)
  {
      $login=true;
       $_SESSION['loggedin']="true";
       $_SESSION['name']=$name; 
       $sql= "UPDATE `registeration` SET status='online' WHERE name='$name'";
       $result=mysqli_query($conn,$sql);
      header("location:welcome.php");
  }
  else{
      $showError="Invalid Credentials";
  } 
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
    <link rel ="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
    <?php
if($login)
{
echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success</strong> You are now logged in.
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
        <h1> LOGIN </h1>
        <form id ="f1" action ="login.php" method="post" onsubmit = "return validation()">
        <div class="container">
            <label><b>Username</b> </label><br><br>
            <input type ="text" id="user" name="name" required>
            <br><br>
            <label><b>Password</b></label><br><br>
            <input type="password" id="pass" name="pass"required>
            <br><br>
            <button type="submit">Login</button>
            <br><br>

            
</div>
    <br><br>
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" class="cancelbtn">Cancel </button>
      <span class="pass"> &nbsp &nbsp Forgot <a href="changepass.php">password?</a></span><br>
      <span class="pass"> Don't have a account? <a href="register.php">Register?</a></span>

</div>
    </form>

</body>
<script>
    function validation()
    {
        var id=document.f1.user.value;
        var ps=document.f1.pass.value;
        if (id .length =="" && ps.length=="")
        {
        alert("Name and Password are Empty please fill the details");
        return false;
        }
    else 
    {
        if(id.length==""){
            alert("Name Field is empty");
            return false;
        }
        if(ps.length==""){
            alert("Password field is empty");
            return false;
        }
    }
    }

    </script>
    </body>
</html>
