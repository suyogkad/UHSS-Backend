<?php
session_start();

if (!isset($_SESSION['username']) || !isset($_SESSION['isLoggedIn']) || !$_SESSION['isLoggedIn']) {
    // User is not logged in, redirect to the admin.php page
    header("Location: admin.php");
    exit();
}
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include '../classes/databaseconnection.php';
include '../classes/databasehelper.php';

$database = new DatabaseConnection();
$helper = new DatabaseHelper($database);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Notices</title>
    <script src="https://kit.fontawesome.com/e30eb907c6.js" crossorigin="anonymous"></script>
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
      }

      .navbar-nav .nav-link:hover {
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

      .container {
        width: 70%;
        margin: auto;
        padding: 20px;
      }

      .news-container {
        border: 1px solid #ccc;
        border-radius: 10px;
        margin-bottom: 10px;
        padding: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
      }

      .news-container:hover {
        transform: scale(1.02);
        border-color: blue;
      }

      .news-title {
        font-weight: bold;
        margin-bottom: 5px;
      }

      .actions {
        text-align: right;
      }

      .btn-group {
        float: right;
      }

      .news-container .title {
        font-weight: bold;
      }

      .news-container .actions {
        text-align: right;
      }

      .news-item {
        border: 1px solid gray;
        border-radius: 15px;
        padding: 20px;
        margin-bottom: 20px;
        transition: all 0.3s ease-in-out;
        box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
      }

      .news-item:hover {
        transform: scale(1.02);
        border-color: blue;
      }

      .btn-danger {
        color: white;
        background-color: red;
      }

      .btn-success {
        color: white;
        background-color: green;
      }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
              <a class="nav-link" aria-current="page" href="news.php">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="notices.php">Notice</a>
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
      <div class="d-flex justify-content-end mb-3">
        <a href="addNotice.php" class="btn btn-success"><i class="fa-solid fa-plus"></i> Add Notice</a>
      </div>
      <?php 
      $table = 'notice';
      $notices = $helper->getAll($table);
      foreach ($notices as $notice): ?>
        <div class="news-item">
          <div class="news-title"><?php echo $notice['title']; ?></div>
          <p><?php echo $notice['content']; ?></p>
          <div class="actions">
            <a href="edit_notice.php?id=<?php echo $notice['id']; ?>" class="btn btn-primary">Edit</a>
            <a href="delete_notice.php?id=<?php echo $notice['id']; ?>" class="btn btn-danger delete-notice" data-title="<?php echo $notice['title']; ?>">Delete</a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
      document.querySelectorAll('.delete-notice').forEach(function(deleteButton) {
        deleteButton.addEventListener('click', function(event) {
          event.preventDefault();
          var noticeTitle = event.target.getAttribute('data-title');
          var confirmation = confirm("Do you want to delete this notice: " + noticeTitle + "?");
          if (confirmation) {
            window.location.href = event.target.getAttribute('href');
          }
        });
      });
    </script>
  </body>
</html>