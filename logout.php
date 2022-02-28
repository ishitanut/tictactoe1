<?php
session_start();
include('connection.php');
$name=$_SESSION['name'];
$sql = "UPDATE registeration SET status = 'offline' WHERE name = '$name'";
$result=mysqli_query($conn,$sql);
if($result)
{
    echo "updated successfully ";
}
session_unset();
session_destroy();
header('location:login.php');
?>