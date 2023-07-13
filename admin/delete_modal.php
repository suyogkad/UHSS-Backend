<?php
    include '../classes/databaseconnection.php';
    include '../classes/databasehelper.php';

    $database = new DatabaseConnection();
    $helper = new DatabaseHelper($database);

    if (isset($_GET['id'])) {
        $imageId = $_GET['id'];

        // Get the image record from the database
        $image = $helper->getById('modal', $imageId);

        // Delete the file from the local directory
        $filePath = $image['photo']; // Assuming the 'photo' column contains the file path
        if (file_exists($filePath)) {
            unlink($filePath);
        }

        // Delete the database entry
        $helper->deleteData('modal', 'id', $imageId);
    }

    header('Location:modal.php');
    exit;
?>
