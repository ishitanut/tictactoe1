<?php
session_start();
if(empty($_SESSION)){
}else{
header('location:welcome.php');
}
$showAlert=false;
$showError=false;
include("connection.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
  include("connection.php");
$name=$_POST["name"];
$gender=$_POST["gender"];
$email=$_POST["email"];
$mobilenumber=$_POST["mobilenumber"];
$pass=$_POST["pass"];
$existsql="SELECT * FROM `registeration` WHERE name='$name'";
$result=mysqli_query($conn,$existsql);
 $num=mysqli_num_rows($result);
 if($num > 0){
   $exists=true;
 }
 else{
   $exists=false;
 }

if($exists==false)
{
  try{
    mysqli_begin_transaction($conn);
  $sql="INSERT INTO registeration (name,email, pass, mobilenumber,gender)VALUES('$name','$email','$pass','$mobilenumber','$gender')" ;
  $result=mysqli_query($conn,$sql);
  mysqli_commit($conn);
  }
  if($result)
  {
    $showAlert=true;
    header("location:login.php");
  }
  catch(exception $ex)
  {
    mysqli_rollback($conn);
  }
}
else{
  $showError="Username Already Exists";
}
}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Comaptible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" type="text/css" href="style.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title> Registeration form </title>
</head>
<body>
<?php require '<partials/nav.php'?>
<?php
if($showAlert)
{
echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success</strong> You are now registered and you can login.
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
    <h1 class='text-center'> Registeration</h1>
    <form name="frm1" enctype="multipart/form-data"  onsubmit = "return validation()" action="register.php" method="post" >
<label><b> Enter Your Name </b></label>
        <input type="text" placeholder="Enter Your Name" name="name" pattern="[a-z A-Z]*" required />

    <label><b>Enter your Email</b></label>
    <input type="email" name="email" placeholder="Enter your Email" required >

    <label><b>Enter Your Password<b></label>
    <td><input type="password" name ="pass" placeholder="Enter Your Password" required>
<
    <label><b>Enter Your Mobile Number<b></label>
    <input type="text" name="mobilenumber" placeholder="Enter your number" required >
 
    <label><b>Select Your Gender<b></label>
        <input type ="text" name="gender" placeholder="Gender" required>
        <!-- //Male<input type="radio" name="gender" value="m">
        Female<input type="radio" name="gender" value="f"> -->

        <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
<!-- <td><input type="submit" name="subit" value="Register" class="login-button">
 <p class="link"><a href="login.php">Click to Login</a></p> 
<input type ="reset" value="Reset">
</td>
</tr>
</table>
</fieldset> -->
</form>
</body>
<script>
    function validation()
    {
        var id=document.frm1.name.value;
        var ps=document.frm1.pass.value;
        var mn=document.frm1.mobilenumber.value;
        var ei=document.frm1.email.value;
        var gr=document.frm1.gender.value;
        if (id .length =="" && ps.length=="" && mn .length =="" && ei .length =="" && gr.length =="" )
        {
        alert("All fields are Empty please fill the details");
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
        if(mn.length==""){
            alert("Mobile Number Field is empty");
            return false;
        }
        if(ei.length==""){
            alert("Email Field is empty");
            return false;
        }
        if(gr.length==""){
            alert("Gender Field is empty");
            return false;
        }

    }
    }

    </script>
</html>

