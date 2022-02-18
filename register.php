<?php
include("connection.php");
//error_reporting(0);
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Comaptible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registeration form </title>
    <style>
        input
    {
        margin:11px;
        width:70%;
    }
        input[type=radio]
        {
            width:20px;
        }
    *{
        padding:0;
        margin:0;
        

    }  
    body{
        margin:50px;
        text-align:center;
        width:60%;
    } 
    input[type=reset]
    {
        border:3px solid;

    } 

    form
    {
        margin:80px auto;
        padding:80px;
        width:80%;
        border:5px solid;
        background:#8bb2eafe;
        letter-spacing:2px
    }
    h1
    {
        font-family:sans-serif;
        display:block;
        font-size:2rem;
        text-align:center;
        letter-spacing:3px;
        color:Red;
        text-transform:uppercase;


    }
    input
    {
        width:80%;
        margin:11px;
    }
    </style>
</head>
 
<body>
    <h1> Registeration</h1>
    <form name="frm1" enctype="multipart/form-data" action="connection.php" method="post">
        <fieldset>
        <table>
            <tr>
                <td colspan="2"><?php echo @$msg;?></td>
</tr>
<tr>
    <td width="500"><b> Enter Your Name </b></td>
    <td width="218">
        <input type="text" placeholder="Enter Your Name" name="name" pattern="[a-z A-Z]*" required /></td>
</tr>
<tr>
    <td width ="159"><b>Enter your Email</b></td>
    <td width="218"><input type="email" name="email" placeholder="Enter your Email" ></td>
</tr>
<tr>
    <td><b>Enter Your Password<b></td>
    <td><input type="password" name ="pass" placeholder="Enter Your Password" ></td>
</tr>
<tr>
    <td><b>Enter Your Mobile Number<b></td>
    <td><input type="text" name="mobilenumber" placeholder="Enter your number" ></td>
</tr>
<tr>
    <td><b>Select Your Gender<b></td>
    <td>
        Male<input type="radio" name="gender" value="m">
        Female<input type="radio" name="gender" value="f">
</td>
</tr>
<tr>
    <td colspan="2" alighn ="center">
<td><input type="submit" name="save" value="Register">
<input type ="reset" value="Reset">
</td>
</tr>
</table>
</fieldset>
</form>
<body>
    </html>



</tabel>
</form>
</body>
</html>

