<?php
require_once('model/model.php');
class Model{
    public function getlogin()
    {
    $host = "localhost";  
    $user = "root";  
    $password = "";  
    $db_name = "game";  
      
    $conn = mysqli_connect($host, $user, $password,$db_name);  
    
    if(!$conn) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
    
     if(isset($_REQUEST['name']) && isset($_REQUEST['pass']))
     {
         $name=$_REQUEST['name'];
         $pass=$_REQUEST['pass'];
         $sql = "SELECT * from registeration where name = '$name' and pass = '$pass'";  
        $res = mysqli_query($conn, $sql);  
        $num = mysqli_num_rows($res);  
            if($num == 1){
             return 'login';
         }
         else
         {
             return 'Invalid User';
         }
     }
    }

}
?>