<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wplexam";

$conn = mysqli_connect('localhost', 'root', '', 'wplexam');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if($password !== $confirm_password){
        echo "Passwords do not match";
    }
    else {
        echo "registered successfully!!";
    }
    // Save user data to database or do further processing
}
?>
<html>
    <body>
        <a href="login.html">Login</a>
    </body>
</html>