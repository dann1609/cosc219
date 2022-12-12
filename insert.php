<?php

$servername = "127.0.0.1";
$username = "root";
$password = "P@ssword1";
$dbname = "cosc219";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$usr = filter_input(INPUT_POST, 'username');
$pwd = filter_input(INPUT_POST, 'password');
$ph = filter_input(INPUT_POST, 'phone');

$sql="Insert into users values ('{$usr}', SHA1('{$pwd}'), '{$ph}');";
$result=mysqli_query($conn, $sql);

if($result){
            header("location: formin.html");
}else{
echo 'Epic fail';
}
