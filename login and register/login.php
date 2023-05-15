<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wplexam";

$conn = mysqli_connect('localhost', 'root', '', 'wplexam');

$sql = "SELECT username, password FROM login";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "could not login";
    }
  } else {
    echo "logged in!!";
  }

// if($_SERVER['REQUEST_METHOD'] == 'POST'){
//     $username = $_POST['username'];
//     $password = $_POST['password'];
//     if($authentication_failed){
//         echo "Invalid username or password";
//     } else {
//         echo "Logged In Successfully!!";
//     }
// }
?>
