<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name ="game";

try {
  $conn = new PDO("mysql:host=$servername;dbname=game", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
if (isset($_POST['name']))
{
$name=$_POST['name'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$mobilenumber=$_POST['mobilenumber'];
$pass=$_POST['pass'];

$sql="INSERT INTO `registeration` ( `Name`, `Email`, `Password`, `Mobile Number`, `Gender`, `Date`) VALUES ( $name, $email,$pass ,$mobilenumber , $gender,CURRENT_TIMESTAMP)";
$q = $pdo->prepare($sql);
$q->execute($vals);
if ($q === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table";;
  }
}
?>