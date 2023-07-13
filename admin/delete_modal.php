<?php

include '../classes/databaseconnection.php';
include '../classes/databasehelper.php';

$database = new DatabaseConnection();
$helper = new DatabaseHelper($database);

if (isset($_GET['id'])) {
    $imageId = $_GET['id'];
}

$helper->deleteData('modal','id',$imageId);
header('Location:modal.php');

?>