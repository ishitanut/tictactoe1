<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Comaptible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> login </title>
    <link rel ="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
    <?php 
    echo $result;
    ?>
    <form action="" method="post">
        <label>Username</label>
        <input id="name" name="name" value="" type ="text" required/>
        <br>
        <label>Password</label>
        <input id="pass" name="pass" type="password" required/>
        <br>
        <button type="submit"> <span> login</span></button>

    </form>
</body>
</html>
