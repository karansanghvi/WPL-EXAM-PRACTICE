<?php
// MySQL database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wplexam";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database if it does not exist
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

// Connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create user table
$sql = "CREATE TABLE IF NOT EXISTS user (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// Insert sample data into the user table
$sql = "INSERT INTO user (name, password, email, phone) VALUES
    ('John Doe', 'password123', 'johndoe@example.com', '555-555-5555'),
    ('Jane Doe', 'password456', 'janedoe@example.com', '555-123-4567'),
    ('Bob Smith', 'password789', 'bobsmith@example.com', '555-987-6543')";
if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully<br>";
} else {
    echo "Error inserting data: " . $conn->error . "<br>";
}

// Retrieve data from user table and display in ascending order of name
$sql = "SELECT * FROM user ORDER BY name ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"]. " - Email: " . $row["email"]. " - Phone: " . $row["phone"]. "<br>";
    }
} else {
    echo "0 results";
}

// Close database connection
$conn->close();
?>
