<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include '../classes/databaseconnection.php';
include '../classes/databasehelper.php';

$database = new DatabaseConnection();
$helper = new DatabaseHelper($database);

$modals = $helper->getAll('modal');
$message = '';

if (isset($_POST['submit'])) {
  if (isset($_FILES['image']) && $_FILES['image']['error'] !== UPLOAD_ERR_NO_FILE) {
      $file_name = $_FILES['image']['name'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_ext = strtolower(end(explode('.', $file_name)));
      $allowed_extensions = array('jpeg', 'jpg', 'png', 'gif');

      if (in_array($file_ext, $allowed_extensions)) {
          $path = "../img/modal/" . $file_name;
          move_uploaded_file($file_tmp, $path);
          $message = "<p style='color:green; margin-top:5px;'>File uploaded successfully.</p>";

          $table = 'modal';

          $modals = $helper->getAll($table);

          if (!empty($modals)) {
              $firstModal = $modals[0];

              if (!empty($firstModal['photo'])) {
                  if (file_exists($firstModal['photo'])) {
                      unlink($firstModal['photo']);
                  }
              }

              $data = [
                  'photo' => $path
              ];
              $helper->updateData($table, $data, 'id', $firstModal['id']);
          } else {
              $data = [
                  'photo' => $path
              ];
              $helper->insertData($table, $data);
          }
      }
  } else {
      $message = "<p style='color:orange; margin-top:5px;'>Please select a file to upload.</p>";
  }
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Image</title>
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

      .img-btn{
        margin-top: 15px;
      }
      
      .slt-img{
        margin-bottom: 10px;
      }

      .text-center{
        margin-top: 20px;
      }

/* Style for the image wrapper */
.image-wrapper {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 10px;
        transition: box-shadow 0.3s ease;
      }

      .image-wrapper:hover {
        box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
      }

      /* Style for the maximize view of the image */
      .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
      }

      /* Modal Content (Image) */
      .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
      }

      /* Add Animation */
      .modal-content, #caption {
        -webkit-animation-name: zoom;
        -webkit-animation-duration: 0.6s;
        animation-name: zoom;
        animation-duration: 0.6s;
      }

      @-webkit-keyframes zoom {
        from {-webkit-transform:scale(0)}
        to {-webkit-transform:scale(1)}
      }

      @keyframes zoom {
        from {transform:scale(0)}
        to {transform:scale(1)}
      }

      /* The Close Button */
      .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
      }

      .close:hover,
      .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
      }

      /* 100% Image Width on Smaller Screens */
      @media only screen and (max-width: 700px){
        .modal-content {
          width: 100%;
        }
      }

      /* Extra small devices (phones, less than 600px) */
@media only screen and (max-width: 600px) {
  .news-edit-container {
    width: 95%;
  }
  .image-wrapper {
    width: 100%;
    height: auto;
  }
}

/* Small devices (landscape phones, 600px and up) */
@media only screen and (min-width: 600px) {
  .news-edit-container {
    width: 90%;
  }
  .image-wrapper {
    width: 80%;
    height: auto;
  }
}

/* Medium devices (tablets, 768px and up) */
@media only screen and (min-width: 768px) {
  .news-edit-container {
    width: 80%;
  }
  .image-wrapper {
    width: 60%;
    height: auto;
  }
}

/* Large devices (desktops, 992px and up) */
@media only screen and (min-width: 992px) {
  .news-edit-container {
    width: 70%;
  }
  .image-wrapper {
    width: 50%;
    height: auto;
  }
}

/* Extra large devices (large desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {
  .news-edit-container {
    width: 70%;
  }
  .image-wrapper {
    width: 40%;
    height: auto;
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
  
  <div class="container mt-4">
    <div class="news-edit-container">
      <form action="" method="post" enctype="multipart/form-data">
        <b class="slt-img">Select image to upload:</b>
        <input type="file" name="image" id="image" accept=".jpg,.jpeg,.png,.gif, .RAW, .avif, .jfif, .pjpeg">
        <input class="img-btn" type="submit" value="Upload Image" name="submit">
        <?php echo $message; ?>
      </form>
    </div>
  </div>

  <div class="container">
  <div class="image-container d-flex justify-content-center align-items-center">
    <?php
      $images = $helper->getAll('modal');
      if (empty($images)) {
          echo "<h2 class='text-center'>No Current Image in the Modal!</h2>";
      } else {
          foreach ($images as $image):
    ?>
    <div class="image-wrapper text-center" style="position: relative;">
        <img id="myImg" src="<?php echo $image['photo'] ?>" style="max-width: 100%; max-height: 100%;">
        <a href="delete_modal.php?id=<?php echo $image['id']; ?>" style="position: absolute; top: 20px; right: 20px;" onclick="return confirm('Do you want to delete this image?')"><i class="fa-solid fa-trash-can" style="color: #ff0000;"></i></a>
    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">
      <span class="close">&times;</span>
      <img class="modal-content" id="img01">
    </div>

    <script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById("myImg");
    var modalImg = document.getElementById("img01");
    img.onclick = function(){
      modal.style.display = "block";
      modalImg.src = this.src;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }
    </script>

    <?php
        endforeach;
      }
    ?>
  </div>
</div>




  <script src="https://kit.fontawesome.com/e30eb907c6.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-DJABlF6Ws9v1WlV1t3sJJliol5RgXC/a6PnL0yADo3SZ5fhDro5Kiv4p4vkaSV6D" crossorigin="anonymous"></script>
  </body>
</html>
