<?php

// DB connection
$servername = "mysql.hostinger.com";
$database   = "u194337420_mail";
$username   = "u194337420_mail";
$password   = "123456d";
$usermail   = $_POST["usermail"];

// Create connection 
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Double Check real email
if (filter_var($usermail, FILTER_VALIDATE_EMAIL)) {
    echo ("$email is a valid email address");
    $sql = "INSERT INTO user_mail (user_mail) VALUES ('" . $usermail . "')";
    
    if (mysqli_query($conn, $sql)) {
        header("Location: http://marginiediril.com/?message=success");
    } else {
        // Check errors
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
} else {
    // Error email
    echo ("$email is not a valid email address");
    header("Location: http://marginiediril.com/?message=error");
}
?