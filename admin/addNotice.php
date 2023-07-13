<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

if (!isset($_SESSION['username']) || !isset($_SESSION['isLoggedIn']) || !$_SESSION['isLoggedIn']) {
    // User is not logged in, redirect to the admin.php page
    header("Location: admin.php");
    exit();
}
include '../classes/databaseconnection.php';
include '../classes/databasehelper.php';

$database = new DatabaseConnection();
$helper = new DatabaseHelper($database);

if (isset($_POST['submit'])) {
    
    $title = $_POST['title'];
    $content = $_POST['content'];
    $buttonTitle = $_POST['button-title'];
    $link = $_POST['link'];
    $date = date('Y/m/d');
  
    $table = 'notice';
    $data = [
        'title'=>$title,
        'content'=>$content,
        'button'=>$buttonTitle,
        'link' =>$link,
        'publishDate'=>$date
        
       ];

    $helper->insertData($table,$data);

     // Show success message
    //  $successMessage = 'notices posted successfully!';

     // Redirect to notices.php after a short delay
     header("refresh:0.1; url=notices.php");
     exit();
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Notice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap');

      body {
        font-family: 'Poppins', sans-serif;
        background-color: #FFFFFF;
      }

      .navbar {
        background-color: #FFFFFF;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
      }

      .navbar-nav .nav-link {
        color: #000000;
        transition: background-color 0.3s ease, color 0.3s ease;
        padding: 15px;
        /* border-radius: 5px; */
      }

      .navbar-nav .nav-link:hover {
        /* background-color: rgba(240, 110, 34, 0.2);*/ /*background hover color */
        color: #044FA2;
      }

      .blue{
        color: #044FA2; 
      }

      .navbar-brand img {
        width: 160px;
        height: 40px;
        margin-left: 10px;
      }

      .mx-auto {
        margin-left: auto !important;
        margin-right: auto !important;
      }

      .news-edit-container {
        width: 70%;
        margin: auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 25px;
    }
    
      .news-edit-container form {
        display: flex;
        flex-direction: column;
      }

      .news-edit-container form input[type="text"], .news-edit-container form textarea {
        margin-bottom: 10px;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
      }

      .news-edit-container form input[type="submit"] {
        padding: 10px;
        border: none;
        background-color: #044FA2;
        color: white;
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
      }

      textarea {
        height: 100px;
        resize: vertical;
      }

      .submit-btn{
        width: 40%;
      }
      .hidden {
      display: none;
    }

    
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="../img/2.jpg" alt="Logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="news.php">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="notices.php">Notice</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="modal.php">Image</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="logout.php">
              <img src="../icons/arrow-right-from-bracket-solid.svg" style="width: 20px;">
              <span class="blue">Logout</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <div class="container mt-4">
    <div class="news-edit-container">
      <h2>Add Notice</h2>
      <form method="POST" action="" id="addNoticeForm">
        <input type="text" id="title" name="title" placeholder="Notice Title" required>
        <textarea id="content" name="content" placeholder="Notice Content" required></textarea>
        <div class="pb-3">Add Buttons?:
          <button class="btn btn-success" id="yesBtn">Yes</button>
          <button class="btn btn-danger" id="noBtn">No</button>

  </div>
          <div id="afterClick" class="hidden">
          <input type="text" name="button-title" placeholder="Button Title">
            <input type="text" name="link" placeholder="Add your Link">
          </div>
        <input class ="submit-btn" type="submit" name="submit" value="Submit">
      </form>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <!-- Include Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/e30eb907c6.js" crossorigin="anonymous"></script>
  <script>
    let yesBtn =document.getElementById("yesBtn");
    let noBtn =document.getElementById("noBtn");
    let afterClick = document.getElementById("afterClick");

    yesBtn.addEventListener('click',function (){
      event.preventDefault(); 
      afterClick.classList.remove('hidden');
      
    })

    noBtn.addEventListener('click',function(){
      event.preventDefault(); 
      afterClick.classList.add('hidden');
    })
  </script>
  </body>
</html>
