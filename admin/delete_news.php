<?php
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

if (isset($_GET['id'])) {
    $newsId = $_GET['id'];

    // Perform necessary validation and security checks here

    $table = 'news';
    $field = 'id';

    $helper->deleteData($table, $field, $newsId);

    // Redirect to the page showing the remaining newss
    header("Location: news.php");
    exit();
}

?>
