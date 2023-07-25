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

    <!-- Academics 1 -->
    <div class="academics-II">
      <div class="column-1">
        <h1 class="school-name">Universal HSS</h1>
        <p>
          Universal Higher Secondary School established in 2049 B.S. is the
          academic shrine for all the meritorious and promising children who
          genuinely desire a meaningful life.
        </p>
        <a
          class="apply-button"
          href="https://forms.gle/w2NVia9CNJt4Zmda8"
          target="_blank"
          >Enroll Now</a
        >
      </div>
    </div>

    <div class="academics-II-content">
      <h1 class="school-name">Academic Levels</h1>
      <hr class="heading-hr" />
      <ul>
        <li><b>Basic Education:</b> PG to VIII</li>
        <li><b>High School:</b> IX to XII</li>
      </ul>
      <br />
      <h1 class="school-name">Teachers</h1>
      <hr class="heading-hr" />
      <p>
        Better teachers, better education! Therefore, only experienced,
        qualified, well-trained and diligent teaching-staff are selected to
        boost up the caring and dedicated environment and, therefore, pursue
        academic activities as successfully as possible. They are supposed to be
        proficient in the subjects concerned. In order to create conducive
        academic environment. We have expected our teacher to be both dutiful
        guardians and loving friends of students.
      </p>
      <br />
      <p>
        Teachers must prepare weekly, term-wise and annual lesson plans to make
        the teaching learning up to-date and efficient. They must prepare and
        keep the individual record of students under the heading of formative
        and internal evaluation scheme so as to trace out student's skills,
        knowledge, potentialities, strengths and weakness and run the class
        accordingly. The scheme helps teachers maintain the cordial and
        co-operative relationship among the guardians, students and themselves.
        Teachers are to take part in the monthly teaching-staff meeting and
        faculty meeting to discuss and reach the conclusion in order to make
        teaching-learning more fruit-bearing. They are given various pertinent
        trainings to update their teaching knowledge, methods and skills.
        Regarding the language skills, language teachers are supposed to be
        well-acquainted with all the skills, and varieties of the language and
        genres of the literature. Likewise, they are supposed to actively and
        sincerely participate in all the activities, programmes and contests
        organized by school.
      </p>
      <br />
      <h1 class="school-name">Curricula</h1>
      <hr class="heading-hr" />
      <p>
        The textbooks prescribed are designed with the aim of providing the best
        chance for acquiring knowledge, skills and higher abilities. We have
        prescribed books to impart more knowledge and skills required to meet
        the end: personal. Social, national as well as universal. The textbooks
        embody books which are designed by renown, devoted and well-experienced
        academic experts. To make the teaching more effective, syllabi will be
        provided to the teaching staffs.
      </p>
      <br />
      <p>
        Regarding the language subjects/disciplines, we select the text cum
        reference books based or founded on the eclectic and interdisciplinary
        approaches so that learning a language can be tastier, more
        knowledgeable and diversified and can also address the wide varieties of
        students as per their taste and talent.
      </p>
    </div>

    <footer>
    <?php
    include '../template/footer.php';
    ?>
    </footer>
 
  </body>
</html>
