<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Comaptible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> TIC TAC TOE </title>
    <link rel ="stylesheet" type="text/css" href="style-log.css">
</head>
<body>
    <div id ="frm">
        <h1> LOGIN </h1>
        <a href="register.php">register</a>
        <form name ="f1" action ="authentication.php" onsubit="return validation()" method="POST">
            <p>
                <lable>Name </label>
                <input type ="text" id="user" name="user"/>
            </p>
            <label>Password</label>
            <input type="text" id="pass" name="pass"/>
</p>
<p>
    <input type ="submit" id =btn value="Login" />
</p>
</form>
</div>
<script>
    function validation()
    {
        var id=document.f1.user.value;
        var ps=document.f1.pass.value;
        if (id .length =="" && ps.length=="")
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
