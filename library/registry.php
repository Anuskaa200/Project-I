<!DOCTYPE html>
<html>
<head>
    <title>Library Management System - Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #AD49E1;
            text-align: center;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
            padding: 20px;
            margin: 20px;
            max-width: 100%;
            display: flex;
            height: 100%;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        img {
            width: 100%;
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="password"]{
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        input[type="email"]{
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
        }

        button:hover {
            background-color: #3e8e41;
        }

        a {
            color: #333;
            text-decoration: none;
        }
        .frm form{
            padding: 20px;
            text-align: left;
        }
    </style>
</head>
<body>

<div class="container">
<div class="pht"><img src="./images/1.png" alt="Library Image"></div>
    <div class="frm">
    <h1>Library Management System - Registration</h1>    
    <form action="register.php" method="post">
        <input type="text" placeholder="Full Name" name="fullname" required>
        <input type="text" placeholder="Phone Number" name="phone_number" required>
        <input type="email" placeholder="Email" required name="email">
        <input type="password" placeholder="Password" required name="password">
        <input type="password" placeholder="Confirm Password" required name="confirm password">
        <button type="submit">Register</button>
    </form>
    </div>
</div>

</body>
</html>