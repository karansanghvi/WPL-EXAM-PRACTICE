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

    $sql = "INSERT INTO login (username, email, password, confirm_password) VALUES ($username, $email, $password, $confirm_password)";

    if ($conn->query($sql) === TRUE) {
        //echo "New record created successfully";
      } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
      }


    if($password !== $confirm_password){
        echo "Passwords do not match";
    }
    else {
        echo "registered successfully!!";
    }
}
?>
<html>
    <body>
        <a href="login.html">Login</a>
    </body>
</html>