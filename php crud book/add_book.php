<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wplexam";

$conn = mysqli_connect('localhost', 'root', '', 'wplexam');

$book_name = $_POST['book_name'];
$author_name = $_POST['author_name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];

$sql = "INSERT INTO books (book_name, author_name, price, quantity) VALUES ('$book_name', '$author_name', '$price', '$quantity')";

$conn->query($sql);

header('Location: index.html');
?>