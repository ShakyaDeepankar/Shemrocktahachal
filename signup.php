<?php


echo "Signup successful!";
$servername = "localhost";
$username = "root";
$password="";
$dbname = "shemrock";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die('Connection Failed :' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into signup(username, password)values(?,?)");
    $stmt->bind_param("si", $username,$password);
    $stmt->execute();
    echo "Registration Successfully";
    $stmt->close();
    $conn->close();
}


        
$username = $_POST["signup-username"];
$password = $_POST["signup-password"];

?>