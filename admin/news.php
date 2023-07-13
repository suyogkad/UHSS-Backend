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
    <title>News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <a href="addNews.php" class="btn btn-primary">Add News</a>
    <div class="container">
        <div class="row">
            <div class="col-12">
            <ul class="list-unstyled">

                <?php 
                $table = 'news';
                $allNews = $helper->getAll($table);
                foreach ($allNews as $news): ?>
                    <li>
                    <?php echo $news['title'].'<br>'.$news['content']; ?>
                    <a href="edit_news.php?id=<?php echo $news['id']; ?>">Edit</a>
                    <a href="delete_news.php?id=<?php echo $news['id']; ?>">Delete</a>
                    </li>
                <?php endforeach; ?>
                </ul>


            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
