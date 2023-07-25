<?php

include '../classes/databaseconnection.php';
include '../classes/databasehelper.php';

$database = new DatabaseConnection();
$helper = new DatabaseHelper($database);

$news = $helper->getAll('news');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../js/jquery.min.js"></script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />
    <link rel="icon" href="../img/school-logo-2.png" />
    <link rel="stylesheet" href="../css/style.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <script
      src="https://kit.fontawesome.com/a076d05399.js"
      crossorigin="anonymous"
    ></script>
    <script src="../js/modal-qr.js"></script>
    <title>Universal Higher Secondary School</title>
  </head>
  <body>
    <img id="top-img-head" src="../img/2.jpg" alt="#" />
    <!-- Marquee -->
    <marquee direction="left"
      >Latest News:&#160; &#160;<?php foreach ($news as $new) {
        echo $new['title'].',';
      } ?>
    </marquee>
    <!-- Go-to top button -->
    <div class="arrow-btn">
      <a href="#"><span class="fas fa-angle-up"></span></a>
    </div>
    <!-- Top Navigation bar -->
    <div id="top-nav-bar">
      <div class="inner-nav-1">
        <div class="top-nav-element">
          <i class="fa-solid fa-phone"></i
          ><a href="tel: 01-4437545"> 01-4437545</a>
        </div>
        <div class="top-nav-element">
          <i class="fa-solid fa-envelope"></i
          ><a href="mailto: infouniversal2022@gmail.com">
            infouniversal2022@gmail.com
          </a>
        </div>
        <div class="top-nav-element">
          <i class="fa-solid fa-location-dot"></i
          ><a
            href="https://www.google.com/maps/place/Universal+Secondary+School/@27.7229003,85.337853,17z/data=!3m1!4b1!4m5!3m4!1s0x39eb196ea55f03ef:0xbcfa286fe50ff017!8m2!3d27.722912!4d85.3400636?shorturl=1"
            target="_blank"
          >
            Dhumbarahi, Kathmandu</a
          >
        </div>
      </div>
      <!-- enroll now button -->
      <a href="https://forms.gle/w2NVia9CNJt4Zmda8" target="_blank">
        <div class="enroll-now" style="text-align: center">Enroll Now</div>
      </a>
      <div class="inner-nav-2">
        <a href="https://www.facebook.com/u2universal" target="_blank">
          <i class="fa-brands fa-facebook-f top-nav-element"></i>
        </a>
        <a href="#" target="_blank">
          <i class="fa-brands fa-twitter top-nav-element"></i>
        </a>
        <a
          href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=infouniversal2022@gmail.com"
          target="_blank"
        ></a>
        <a
          href="https://www.instagram.com/myuniversalenglishschool/"
          target="_blank"
        >
          <i class="fa-brands fa-instagram top-nav-element"></i>
        </a>
      </div>
    </div>
    <hr id="big-hr" />
    <!-- Navigation bar -->
    <section class="navigation">
      <div class="nav-container">
        <nav>
          <div class="nav-mobile">
            <a id="nav-toggle" href="#!"><span></span></a>
          </div>
          <ul class="nav-list">
            <!-- Setting the links to #! will ensure that no action takes place on click. -->
            <li><a href="../index.php">Home</a></li>
            <li>
              <a href="#!">Academics</a>
              <ul class="nav-dropdown">
                <li><a href="./academics1.php">School</a></li>
                <li><a href="./academics2.php">U2 (+2)</a></li>
                <li><a href="./academics3.php">College</a></li>
              </ul>
            </li>
            <li><a href="./facilities.php">Features</a></li>
            <li><a href="./notice.php">Notice</a></li>
            <li><a href="./news.php">News & Events</a></li>
            <li><a href="./about-us.php">About Us</a></li>
            <li>
              <a href="#!">Resources</a>
              <ul class="nav-dropdown">
                <li><a href="#!">Alumni</a></li>
                <li><a href="./gallery.php">Gallery</a></li>
                <li><a href="#!">Downloads</a></li>
                <li><a href="./videoppt.php">Video/PPT</a></li>
                <li><a href="./apply.php">How To Apply</a></li>
              </ul>
            </li>

            <li>
              <a
                href="https://universalenglishschool.blogspot.com/"
                target="_blank"
                >Blog</a
              >
            </li>
          </ul>
        </nav>
      </div>
    </section>

    <div class="apply">
      <h1 class="school-name">Admission</h1>
      <p>
        Admission of new students will be made every year on the basis of
        written and oral tests (i.e. entrance cum level test). It will be on the
        major subjects such as English, Nepali, Mathematics and Science. The
        entrance test is conducted as an essential pre-condition for the
        enrolment. The selection of students entirely rests upon the
        principal&#39;s discretion. Student&#39;s disciplines and manners are
        also counted. Moreover, even the admitted student can be rusticated at
        any time if he/she fails to keep up with the rules and regulations of
        the school.
      </p>
      <p>
        <b>You can apply admission online by clicking the link below: </b>
        <a
          class="apply-button ap-sp"
          href="https://forms.gle/w2NVia9CNJt4Zmda8"
          target="_blank"
          >Apply Online</a
        >
      </p>
      <br />
      <h1 class="school-name">Admission Criteria</h1>
      <ul>
        <li>Mark Sheet</li>
        <li>Transfer cum Character Certificate</li>
        <li>Entrance, Attitude & Aptitude Test</li>
        <li>Interview</li>
      </ul>
      <h1 class="school-name">Bank details for payment</h1>
      <p>NCC Bank</p>
      <p>Sukedhara Branch</p>
      <p>
          Account No:
          <span id="accountNumberHidden">XXXXXXXXXX</span>
          <span id="accountNumberShown" class="hide">0850000016601</span> 
          <button id="toggleButton" class="eye-button"><i class="fas fa-eye"></i></button>
      </p>
      <p>Account Name: Universal English School Pvt. Ltd.</p>
      <br />
      <b>Pay instantly through your mobile banking by scanning QR Code below:</b>
      
<!-- css code for hide/show eye button -->
<style>
.hide {
    display: none;
}

.eye-button {
    background: none;
    border: none;
    cursor: pointer;
    outline: inherit;
}
</style>

<!-- script to toggle hide/show eye button -->
<script>
var toggleButton = document.getElementById('toggleButton');
var accountNumberHidden = document.getElementById('accountNumberHidden');
var accountNumberShown = document.getElementById('accountNumberShown');

toggleButton.addEventListener('click', function() {
    if (accountNumberShown.classList.contains('hide')) {
        accountNumberShown.classList.remove('hide');
        accountNumberHidden.classList.add('hide');
        toggleButton.innerHTML = '<i class="fas fa-eye-slash"></i>';
    } else {
        accountNumberShown.classList.add('hide');
        accountNumberHidden.classList.remove('hide');
        toggleButton.innerHTML = '<i class="fas fa-eye"></i>';
    }
});


</script>

      <!-- QR code pop up -->
      <a id="opener" class="apply-button1 ap-sp" href="#">View QR</a>

      <div class="modal-content">
        <img src="../img/qr.jpg" alt="#" />
      </div>
      <!-- QR code pop up ends -->
    </div>

    <footer>
    <?php
    include '../template/footer.php';
    ?>
    </footer>
  </body>
</html>
