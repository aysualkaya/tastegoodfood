
<?php

$username =$_POST['username'];
$email=$_POST['email'];
$password= $_POST['password'];


//database connection

$conn = new mysqli('localhost','root','','login_db');
if ($conn -> connect_error){
    die('Connection Failed : '.$conn->connect_error);
} else{
    $stmt=$conn->prepare("insert into sign_up(username, email, password) values(?,?,?)");
    $stmt -> bind_param("sss",$username,$email,$password);
    $stmt->execute();
    header("Location: sign.html");
    $stmt->close();
    $conn->close();
}
/*
$host = "localhost";
$dbname = "login_db";
$username = "root";
$password = "";

$mysqli = new mysqli(hostname: $host,
                      username:$username,
                      password:$password,
                      database:$dbname);

    if($mysqli->connect_erno){
        die("Connection error: " .$mysqli->connect_error);
    }

    return $mysqli;


*/
?>
