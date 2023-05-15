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
?>
