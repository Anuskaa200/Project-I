<?php
// Connect to the database
$con = mysqli_connect('localhost', 'root', '', 'library');

if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Retrieve form data
$fullname = $_POST['fullname']; //fullname from form input name
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Check if passwords match
if ($password !== $confirm_password) {
    die("Passwords do not match!");
}
// Create a log file
$log_file = 'registration_log.txt';

// Log database connection error
if (!$con) {
    $log_message = "Database connection failed: " . mysqli_connect_error() . "\n";
    error_log($log_message, 3, $log_file);
    die("Database connection failed: " . mysqli_connect_error());
}

// Log password mismatch error
if ($password !== $confirm_password) {
    $log_message = "Passwords do not match!\n";
    error_log($log_message, 3, $log_file);
    die("Passwords do not match!");
}

// Log database insertion error
if (!$res) {
    $log_message = "Insertion failed: " . mysqli_error($con) . "\n";
    error_log($log_message, 3, $log_file);
    die("Insertion failed: " . mysqli_error($con));
} else {
    // Log successful registration
    $log_message = "User registered successfully: $fullname, $phone_number, $email\n";
    error_log($log_message, 3, $log_file);
    // Redirect to home page after successful registration
    header("Location: index.php");
    exit();
}


// Insert into the database
$sql = "INSERT INTO users (fullname, phone, email, password) 
        VALUES ('$fullname', '$phone_number', '$email', '$password')";

$res = mysqli_query($con, $sql);

if (!$res) {
    die("Insertion failed: " . mysqli_error($con));
} else {
    // Redirect to home page after successful registration
    header("Location: index.php");
    exit();
}

// Close the connection
mysqli_close($con);
?>