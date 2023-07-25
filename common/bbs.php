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
      <!-- <img
        class="school-image"
        src="../photos/Academics/front.jpg"
        alt="school-building"
      /> -->

      <div class="school-history">
        <h1 class="school-name">BBS Programme</h1>
        <p>
          BBS (Bachelor of Business Studies) is a TU affiliated programme. The
          three-year programme is a multi-disciplinary programme of Management
          Stream, It offers an avenue to the students virtually varied and
          diverse sorts of knowledge, skills and higher abilities. Further, the
          programme is strong enough to enable and ennoble students to gear up
          the very bright and prosperous career from a number of perspectives.
          The in-depth theoretical knowledge and the intensive course, if truly
          learnt and earned, can open the avenues to learners that range from
          the position of the accountant to that of the auditor-general.
        </p>
        <p>
          Students as a member of the BBS programme are supposed to incorporate
          various compulsory subjects. In addition, they can opt for various
          optional subjects as per their specialization depending on the
          competence, interest and importance.
        </p>

        <br />
        <h1 class="school-name">Why BBS at Pioneer ?</h1>
        <p></p>
        <p><b>"Because our BBS has the BBA flavor"</b></p>
        <p>
          Of course, there are colleges galore all across the nation that offer
          the BBS classes. Further, they need not worry about the admission. All
          have the easy access to BBS. It is because of this very reason,
          students are found to be taking the programme very lightly. The major
          concern of the students should not be the admission but the excellent
          score, grade and percentage with a lot of exposure and experiments for
          the competency and thereof better career. It is at this juncture,
          Pioneer International College differs from other from a number of
          angles and perspectives because we believe in what the management
          Guru, Shiv Khera has written in his best seller, You Can Win, "Winners
          don't do different things but they do things differently." In addition
          to providing the environment for exam-centered teach ing-leaning, we
          do offer the activities, modules and methods to enhance knowledge.
          skills and higher abilities of creative and critical types. How?
        </p>
        <p><b>In the following ways:</b></p>
        <ul>
          <li>Varieties of Interactions and Discussions</li>
          <li>Varieties of Presentations (esp, PPT)</li>
          <li>Continuous and Periodic Evaluations</li>
          <li>Simulation and Role Play</li>
          <li>Project Work</li>
          <li>Report and Thesis Writing</li>
          <li>Orientation, Training and Workshop</li>
          <li>Infotaining Methods and Modules</li>
          <li>Event Management</li>
          <li>Guest Lectures</li>
          <li>Talk Programmes</li>
          <li>Case Studies and Seminars</li>
          <li>Internship to Top Five Students</li>
          <li>Research and Publication</li>
          <li>Field Types and Industrial Visits</li>
          <li>Internet Access and Smart Classes</li>
          <li>Interactive and Participatory Methods</li>
          <li>Games and Sports</li>
        </ul>
      </div>
    </div>
    <footer>
    <?php
    include '../template/footer.php';
    ?>
    </footer>
  </body>
</html>
