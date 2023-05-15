<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Authenticate user with provided username and password
    if($authentication_failed){
        echo "Invalid username or password";
    } else {
        // Redirect user to dashboard page
        echo "Logged In Successfully!!";
    }
}
?>
