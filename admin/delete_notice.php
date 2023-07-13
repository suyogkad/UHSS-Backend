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
    $noticeId = $_GET['id'];

    // Perform necessary validation and security checks here

    $table = 'notice';
    $field = 'id';

    $helper->deleteData($table, $field, $noticeId);

    // Redirect to the page showing the remaining notices
    header("Location: notices.php");
    exit();
}

?>
