<?php
session_start();
$con = mysqli_connect('localhost', 'root', '', 'library');  // Make sure these match your DB credentials

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // Query to find user with matching username and password
    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        // Login success: Fetch the user and set session variables
        $user = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $user['email'];  // Store email in session
        header("Location: dashboard.php");  // Corrected redirect to the HTML page
        exit();
    } else {
        // Invalid credentials
        $_SESSION['msg'] = "Invalid username or password!";
        header("Location: login.php");  // Redirect back to the login page
        exit();
    }
}
?>
