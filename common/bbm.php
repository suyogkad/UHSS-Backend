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

    <!-- About Us -->
    <div class="about-us">
      <img
        class="school-image"
        src="../photos/Academics/bbm.png"
        alt="school-building"
      />

      <div class="school-history">
        <h1 class="school-name">
          The BBM students are supposed to go with the following courses on the
          semester-wise base:
        </h1>
        <br />
        <h3><b>First Semester(15 Credit Hours):</b></h3>
        <ol>
          <li>ECO 211: Introductory Microeconomics</li>
          <li>ENG 211: English-I</li>
          <li>MGT 201: Principles of Management</li>
          <li>MTH 211: Business Mathematics-I</li>
          <li>SOC 201: Sociology for Business</li>
        </ol>
        <br />
        <h3><b>Second Semester(15 Credit Hours):</b></h3>
        <ol>
          <li>ACC 201: Financial Accounting</li>
          <li>ECO 212: Introductory Microeconomics</li>
          <li>ENG 212: English-II</li>
          <li>MTH 212: Business Mathematics-II</li>
          <li>PSY 201: Psychology</li>
        </ol>
        <br />

        <h3><b>Third Semester(15 Credit Hours):</b></h3>
        <ol>
          <li>ACC 212: Computer Based Financial Accounting</li>
          <li>ENG 213: Business Communication</li>
          <li>FIN 211: Basic Finance</li>
          <li>SOC 202: Nepalese Society and Politics</li>
          <li>STT 211: Business Studies</li>
        </ol>

        <br />

        <h3><b>Fourth Semester(15 Credit Hours):</b></h3>
        <ol>
          <li>ACC 212: Accounting for Decision Making</li>
          <li>FIN 212: Financial Management</li>
          <li>ACC 213: Taxation in Nepal</li>
          <li>MGT 202: Human Resource Management</li>
          <li>RCH 201: Business Research Method</li>
        </ol>
        <br />

        <h3><b>Fifth Semester(15 Credit Hours):</b></h3>
        <ol>
          <li>Elective Area Course</li>
          <li>Focus Area Course-I</li>
          <li>MGT 203: Organizational Behavior</li>
          <li>MGT 205: Operation Management</li>
          <li>MKT 201: Fundamentals of Marketing</li>
        </ol>
        <br />

        <h3><b>Sixth Semester(15 Credit Hours):</b></h3>
        <ol>
          <li>Focus Area Course-II</li>
          <li>IT 202: Database Management</li>
          <li>MGT 206: Business Environment in Nepal</li>
          <li>MGT 207: International Business</li>
          <li>MGT 209: Business Ethics and Social Responsibility</li>
        </ol>
        <br />
        <h3><b>Seventh Semester(15 Credit Hours):</b></h3>
        <ol>
          <li>Elective Area Course-I</li>
          <li>Focus Area Course-III</li>
          <li>Focus Area Course-IV</li>
          <li>IT 211: E-commerce</li>
          <li>MGT 208: Business Strategy</li>
        </ol>
        <br />
        <h3><b>Eight Semester(15 Credit Hours):</b></h3>
        <ol>
          <li>Elective Course-II</li>
          <li>Elective Course-III</li>
          <li>Focus Area Course-IV</li>
          <li>Project Report writing or Internship</li>
        </ol>
      </div>
    </div>
    <footer>
    <?php
    include '../template/footer.php';
    ?>
    </footer>
  </body>
</html>
