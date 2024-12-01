<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
            padding: 20px;
            margin: 20px auto;
            max-width: 400px;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #3e8e41;
        }

        a {
            color: #333;
            text-decoration: none;
        }

        .forgot-password {
            display: block;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Library Management System</h1>
    <img src="../library/images/2.jpg" alt="Library Image" width="100%">
    <!-- Form submission to login_form.php -->
    <form action="login.php" method="POST">
        <input type="text" name="email" placeholder="Email or Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <label>
            <input type="checkbox" name="remember_me"> Remember me
        </label>
        <button type="submit">Login</button>
        <p>OR</p>
        <a href="#">No account? Create account</a>
    </form>
</div>

</body>
</html>
