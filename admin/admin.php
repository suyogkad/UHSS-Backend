<?php

session_start();

include '../classes/databaseconnection.php';
include '../classes/databasehelper.php';

$error = '';

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
        $error = "Invalid username or password.";
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
            width: 50%;
            margin-right: 6%;
            margin-left: 1%;
            
        }

        .logo {
            max-width: 90%;
        }

        .vertical-line {
            border-left: 1px solid lightgray;
            height: 80%;
            margin: auto;
        }

        .line{
            width: 100%;
            margin-left: 15%;

        }

        .right {
            width: 50%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            padding: 20px;
            position: relative;
        }

        .color-line {
            margin-left: 26.7%;
            height: 5px;
            width: 10%;
            background: linear-gradient(
            to right,
            #F06E22 50%,
            #044FA2 50%);
        }

        h2 {
            margin: 20px 0px;
            width: 85%;
            text-align: center;
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

        .input-container i {
        position: absolute;
        left: 10px;
        top: 10px;
        color: gray;
        transition: color 0.3s;
    }

    .input-field:focus + i {
        color: #044FA2;
    }

    .error-message {
        color: red;
        margin-bottom: 10px;
        margin-top: 5px;
        margin-left: 8px;
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
            <a href="https://www.universalenglishschool.edu.np" target="_blank"><img src="../img/2.jpg" alt="logo" class="logo"></a>
        </div>
        <div class="vertical-line"></div>
        <div class="right">
            <div class="color-line"></div>
            <h2>Login as an Admin</h2>
            <form method="POST" action="">
                <div class="input-container">
                    <input type="text" class="input-field" id="username" name="username" placeholder="Username">
                    <i class="fas fa-user"></i>
                </div>
                <div class="input-container">
                    <input type="password" class="input-field" id="password" name="password" placeholder="Password">
                    <i class="fas fa-lock"></i>
                </div>
                <?php
                    if($error != '') {
                        echo "<div class='error-message'>".$error."</div>";
                    }
                ?>
                <input type="submit" name="submit" class="submit-btn" value="Login">
            </form>
            <a href="mailto:support@universalenglishschool.edu.np?subject="
   class="help-link"
   onclick="setEmailSubject()">
  <b>Get help signed in</b>
</a>

<script>
  function setEmailSubject() {
    var currentDate = new Date();
    var formattedDate = currentDate.toISOString().split('T')[0];
    var formattedTime = currentDate.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit', hour12: true });
    var timezone = Intl.DateTimeFormat().resolvedOptions().timeZone;
    var subject = encodeURIComponent('Admin Password Reset - UHSS (' + formattedDate + ' ' + formattedTime + ' ' + timezone + ')');
    var mailtoLink = document.querySelector('.help-link').getAttribute('href');
    mailtoLink += subject;
    document.querySelector('.help-link').setAttribute('href', mailtoLink);
  }
</script>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/e30eb907c6.js" crossorigin="anonymous"></script>
</body>
</html>
