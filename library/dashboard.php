<?php
session_start();
// If the user is not logged in, redirect to the login page
if (!isset($_SESSION['email'])) {
    header("Location: login.php");  // Redirect to login if not logged in
    exit(); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Library Home</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <style>
        /* Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #e1e8e79c;
            margin: 0;
            padding: 0;
        }

        /* Sidebar Styles */
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: purple;
            float: left;
            position: fixed;
            top: 0;
            left: 0;
        }

        .sidebar h2 {
            margin: 20px;
            text-align: center;
            color: white;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .sidebar>ul>li>a {
            color: white;
        }

        .sidebar li {
            padding: 10px;
            color: white;
            border-bottom: 1px solid #dd5bab;
        }

        .sidebar li:last-child {
            border-bottom: none;
        }

        .sidebar a {
            text-decoration: none;
            color: #f6f4f548;
        }

        /* Content Area */
        .content {
            margin-left: 250px;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 30px;
        }

        .content h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .card {
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
            width: 45%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .card:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .card h2 {
            margin-bottom: 10px;
            color: purple;
        }

        .card p {
            margin: 0;
            color: #666;
        }

        .card .info {
            margin-top: 10px;
        }

        .card .info a {
            text-decoration: none;
            color: #007bff;
        }

        /* Welcome Section */
        .welcome-section {
            background-color: purple;
            color: white;
            padding: 50px 20px;
            text-align: center;
            margin-bottom: 30px;
        }

        .welcome-section h1 {
            font-size: 3em;
            margin-bottom: 10px;
        }

        .welcome-section p {
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>AP Library</h2>
        <ul>
            <li><a href="#"><i class="fa-solid fa-user"></i> <?php echo $_SESSION['email']; ?></a></li>
            <li><a href="home.php">Home</a></li>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="#">Members</a></li>
            <li><a href="#">Books</a></li>
            <li><a href="#">Magazines</a></li>
            <li><a href="#">Issued</a></li>
            <li><a href="#">Returned</a></li>
            <li><a href="#">Not Returned</a></li>
        </ul>
    </div>

    <!-- Content Section -->
    <div class="content">
        <!-- Welcome Section -->
        <div class="welcome-section">
            <h1>Welcome to the Library!</h1>
            <p>Explore books, manage members, and more in our library system.</p>
        </div>

        <!-- Feature Cards -->
        <div class="card">
            <h2>Search Books</h2>
            <p>Find books quickly and easily in the library catalog.</p>
            <div class="info">
                <a href="#">Learn More</a>
            </div>
        </div>
        
        <div class="card">
            <h2>Manage Members</h2>
            <p>Admin can add, update, and remove library members.</p>
            <div class="info">
                <a href="#">Learn More</a>
            </div>
        </div>

        <div class="card">
            <h2>Borrow Books</h2>
            <p>Members can borrow books for a specific duration.</p>
            <div class="info">
                <a href="#">Learn More</a>
            </div>
        </div>

        <div class="card">
            <h2>Track Issued Books</h2>
            <p>View the status of issued books and manage due dates.</p>
            <div class="info">
                <a href="#">Learn More</a>
            </div>
        </div>
    </div>
</body>
</html>
