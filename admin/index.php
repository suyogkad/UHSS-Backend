<?php
session_start();
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

if (!isset($_SESSION['username']) || !isset($_SESSION['isLoggedIn']) || !$_SESSION['isLoggedIn']) {
    header("Location: admin.php");
    exit();
}

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
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap');

      body, html {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(120deg, #3498db, #8e44ad);
        color: #333;
        height: 100%;
        overflow: hidden;
        margin: 0;
        padding: 0;
      }

      .navbar {
        background-color: #ffffff;
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

      .greeting {
        text-align: center;
        margin-top: 1em;
        font-size: 1.5em;
        color: #fff;
      }

      .section {
        display: flex;
        justify-content: space-between;
        margin: 1em;
        height: calc(100vh - 56px - 2em);
      }

      .widget-container {
        width: 21%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
      }

      .widget{
        height: 40vh;
        border-radius: 15px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        background: #FFF;
        padding: 10px;
        margin-bottom: 15px !important;
      }

      .time {
        font-family: 'Poppins';
        font-weight: bold;
        height: 40vh;
        color: #ffffff;
        border-radius: 15px;
        background: #FFF;
        padding: 10px;
        margin-bottom: 15px !important;
        background: none !important;
        font-size: 24px !important;
      }

      .widget{
        align-items: center !important;
      }

      .text-center{
        margin-top: 10px;
      }
      
      .content {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        width: 37.5%;
        height: 86vh;
        padding: 1em;
        overflow-y: auto;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        border-radius: 15px;
        background-color: rgba(255, 255, 255, 0.7);
      }

      .content-item {
        border-bottom: 1px solid #000000;
        padding: 2em 0;
        transition: background-color 0.3s ease;
      }

      .content-item:hover {
        /* background-color: rgba(0, 0, 0, 0.1); */
        color: #044FA2;
        font-weight: bolder;
      }

      .view-more {
  text-align: center;
  background-color: #044FA2;
  color: #fff;
  padding: 1em;
  display: block;
  text-decoration: none;
  border-radius: 5px;
  margin-top: auto; /* This will push the button to the bottom */
}

.view-more:hover{
  background-color: #044FA2;
  opacity: 70%;
  color: #ffffff;
}

      .widget > iframe {
        width: 100%;
        height: 100%;
        border: none;
      }

      .content-item:hover{
        cursor: pointer;
      }

      /* Responsive Styles */
      @media (max-width: 768px) {
        .widget-container {
          display: none;
        }

        .content {
          width: 90%;
          margin: auto;
          margin-bottom: 10px;
        }

        .section {
          flex-direction: column;
          align-items: center;
        }
      }

      @media (min-width: 768px) and (max-width: 1024px) {
  .section {
    flex-direction: column;
    align-items: center;
  }

  .widget-container {
    flex-direction: row;
    width: 100%;
    justify-content: space-evenly;
  }

  .widget, .time {
    width: 45%;
    height: 25vh;
    margin-bottom: 1em;
  }

  .content {
    width: 90%;
    height: 60vh;
    margin-bottom: 10px;
  }
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
            <a class="nav-link" href="index.php">Home</a>
          </li>
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

  <div class="section">
      <div class="widget-container">
        <div class="time">
    <div id="time" style="padding: 10px; font-size: 1.5em;"></div>
</div>
<script>
  function updateTime() {
    const now = new Date();
    const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit', second: '2-digit' };
    const timeString = now.toLocaleString('en-US', options);
    document.getElementById('time').innerHTML = timeString;
  }
  setInterval(updateTime, 1000);
  updateTime();
</script>
        <div class="widget">
          <iframe id="calender" src="https://www.hamropatro.com/widgets/calender-medium.php" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" allowtransparency="true"></iframe>
        </div>
      </div>
      <div class="content">
        <h3 class="text-center">Recent Notices</h3>
        <?php
        $allNotices = $helper->getAll('notice');
        foreach ($allNotices as $notice) {
          echo '<div class="content-item">'.$notice['title'].'</div>';
        }
        ?>
        <a href="notices.php" class="view-more">View More</a>
      </div>
      <div class="content">
        <h3 class="text-center">Recent News</h3>
        <?php
        $allNews = $helper->getAll('news');
        foreach ($allNews as $news) {
          echo '<div class="content-item">'.$news['title'].'</div>';
        }
        ?>
        <a href="news.php" class="view-more">View More</a>
      </div>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+6kn/MO0/mZ6JUhffCOepdGca/7+m" crossorigin="anonymous"></script>
  </body>
</html>