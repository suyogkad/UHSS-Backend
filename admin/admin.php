<?php

session_start();

include '../classes/databaseconnection.php';
include '../classes/databasehelper.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $database = new DatabaseConnection();
    $helper = new DatabaseHelper($database);

    $table = 'admin';
    $condition = ['name' => $username];

    $result = $helper->getData($table, $condition);

    if ($result && password_verify($password, $result['password'])) {
           // Verification successful
    $_SESSION['username'] = $username;
    $_SESSION['isLoggedIn'] = true;
        header("Location: index.php");
        exit();
    } else {
        // Verification failed
        echo "Invalid username or password.";
    }
}

//  This code is just for registering one user I did it inorder to hash password

// if (isset($_POST['submit'])) {
   
//     $username = $_POST['username'];
//     $password = $_POST['password'];
//     $hasedPassword = $hash = password_hash($password, PASSWORD_DEFAULT);

//     $data = [
//         'name'=>$username,
//         'password'=>$hasedPassword
//     ];

//     $database = new DatabaseConnection();
//     $helper = new DatabaseHelper($database);

//     $table = 'admin';

//     $helper->insertData($table,$data);


// }


?>
<!DOCTYPE html>
<html>
<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap');

        body, html {
            font-family: 'Poppins', sans-serif;
            height: 100%;
            margin: 0;
            overflow: hidden;
        }

        .container {
            display: flex;
            height: 100%;
        }

        .left {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40%;
        }

        .logo {
            max-width: 90%;
        }

        .vertical-line {
            border-left: 1px solid lightgray;
            height: 60%;
            margin: auto;
        }

        .right {
            width: 60%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            padding: 20px;
            position: relative;
        }

        .color-line {
            height: 5px;
            width: 10%;
            background: linear-gradient(
            to right,
            #F06E22 30%,
            #044FA2 30%,
            #0F5132 30%);
        }

        h2 {
            margin: 20px 0px;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 50%;
            align-self: center;
        }

        .input-container {
            position: relative;
            margin: 5px 0;
        }

        .input-container i {
            position: absolute;
            left: 10px;
            top: 10px;
            color: gray;
        }

        .input-field {
            padding: 10px;
            padding-left: 40px;
            border-radius: 25px;
            border: 1px solid #ccc;
            width: 100%;
            transition: 0.3s;
        }

        .input-field:focus {
            transform: scale(1.02);
        }

        .submit-btn {
            padding: 10px;
            margin: 10px 0;
            background-color: #044FA2;
            color: white;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            transition: 0.3s;
            width: 40%;
            align-self: center;
        }

        .submit-btn:hover {
            background-color: rgb(56, 119, 187);
        }

        .help-link {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            color: #007BFF;
            text-decoration: none;
            font-size: 12px;
        }

        .help-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left">
            <img src="img/2.jpg" alt="logo" class="logo">
        </div>
        <div class="vertical-line"></div>
        <div class="right">
            <div class="color-line"></div>
            <h2>Login as an admin</h2>
            <form method="POST" action="">
                <div class="input-container">
                    <i class="fas fa-user"></i>
                    <input type="text" class="input-field" id="username" name="username" placeholder="Username">
                </div>
                <div class="input-container">
                    <i class="fas fa-lock"></i>
                    <input type="password" class="input-field" id="password" name="password" placeholder="Password">
                </div>
                <input type="submit" name="submit" class="submit-btn" value="Login">
            </form>
            <a href="#" class="help-link"><b>Get help signed in</b></a>
        </div>
    </div>
    <!-- Include Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/e30eb907c6.js" crossorigin="anonymous"></script>
</body>
</html>
