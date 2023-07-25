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

    <!-- Academics 2 -->
    <div class="academics-II">
      <div class="column-1">
        <h1 class="school-name">U2 College</h1>
        <p>
          U2 is established with with the sincere aim of imparting excellent
          education with the blending of professionalism and eastern ethical
          values since year 2008.
        </p>
        <a
          class="apply-button"
          href="https://forms.gle/w2NVia9CNJt4Zmda8"
          target="_blank"
          >Enroll Now</a
        >
      </div>
      <div class="column-2">
        <h1 class="school-name">
          <a class="course-button" role="button" href="../common/courses.php"
            >Courses</a
          >
        </h1>

        <h1 class="school-name">
          <a class="features-button" role="button" href="../common/whyu2.php"
            >Why U2 ?</a
          >
        </h1>
      </div>
    </div>

    <div class="academics-II-content">
      <h1 class="u2-features2">Career Counselling and Welfare Department</h1>
      <p>
        Our special counselling department will organize various talk programs
        and guest lecture classes by inviting experts and academicians which
        will help you decide on what course you should/must take in the future
        and in which university abd country. In addition, department will be
        giving you necessary tips, brochures and other available literature that
        we will have through various sources. Likewise, the department will
        organize to foster in you further social norms and values so as to help
        you become a truly synchronized personality of professional excellence
        and gregarious and ethnical values.
      </p>
      <br />
      <h1 class="u2-features2">Scholarship/Financial Aid Programme</h1>
      <p>
        We do offer inspirational incentive to all the meritorious students.
        Students belonging to the indigenous and backward ethnic community and
        in need for financial aid will also benefit from our
        scholarship/financial aid program. The students wishing to apply for
        scholarship should submit his/her testimonials with an application form
        for scholarship by addressing to the principal.
      </p>
      <br />
      <h1 class="u2-features2">Non-Credit Courses and Activities</h1>
      <p>
        In order to offer versatility and dynamism, we offer students computer,
        meditation and Yoga courses. Project-work, guest lecture, seminars,
        workshops, presentation, simulation and so on are our inherent
        activities. For the development of more skills of the students
        non-credit classes are offered to develop skills like:
      </p>
      <ul>
        <li>Career Management</li>
        <li>Research Classes</li>
        <li>Team Leadership</li>
        <li>Learning</li>
        <li>Interpersonal Skills</li>
        <li>Effective Reading</li>
        <li>Oral Presentation</li>
        <li>Written Presentation</li>
        <li>Time Management</li>
        <li>Stress Management</li>
        <li>CSR (Corporate Social Responsibilities) Activities</li>
      </ul>
    </div>

    <footer>
    <?php
    include '../template/footer.php';
    ?>
    </footer>
  </body>
</html>
