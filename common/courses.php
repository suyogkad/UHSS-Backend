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
    <script src="../js/see-more.js"></script>
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
    <hr />
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

    <div class="courses">
      <div class="top-courses">
        <button class="apply-button" onclick="history.back()">
          <i class="fa-solid fa-angle-left"></i>
        </button>
        <h1 class="school-name">Courses</h1>
      </div>
      <hr class="heading-hr" />
      <div class="course-container">
        <div class="course-content">
          <div class="course-inner">
            <img src="../photos/course/sience.jpg" alt="#" />
            <div class="course-inner-desc">
              <div class="course-inner-desc-top">
                <div>2 Years</div>
              </div>
              <div class="course-inner-desc-bottom">
                <h3>Science +2</h3>
                <p>
                  Pursuing +2 in Science is suitable for the students opting to
                  create/join a career in the field of Science and Technology
                  and related disciplines. 10 + 2 in science entitles a student
                  with the eligibility to pursue a career in the field of
                  Medicine, Engineering and other applied and theoretical
                  natural science sectors.<span id="dots-1">...</span>
                </p>
                <span id="more-1">
                  <ul>
                    <li>
                      <b>Computer Group:</b> This is for the students interested
                      in Computer and allied fields.
                    </li>
                    <li>
                      <b>Physical Group:</b> This also for students opting for
                      Engineering and allied fields of Physical Sciences.
                    </li>
                    <li>
                      <b>Group:</b> This is for the students interested in
                      medicine and allied fields as well as Bio Sciences.
                    </li>
                  </ul>
                  <p>
                    Plus two in Science offers an integrated package in Physics,
                    Chemistry, Biology and Mathematics. The program aims to
                    equip students with a level fit for further studies in
                    technology, medicine, engineering and biotechnology. Plus
                    two in Science is for those students who have an aptitude
                    for science and mathematics. This program aims to develop
                    strong foundation in students. On completion students can
                    pursue their further studies in medicine, engineering or
                    other science related studies.
                  </p> </span
                ><span id="btn-1" class="more-less" onclick="moreLess(1)"
                  >See More</span
                >
              </div>
            </div>
          </div>
        </div>
        <div class="course-content">
          <img src="../photos/course/mgmt.jpg" alt="#" />
          <div class="course-inner-desc">
            <div class="course-inner-desc-top">
              <div>2 Years</div>
            </div>
            <div class="course-inner-desc-bottom">
              <h3>Management +2</h3>
              <p>
                Students pursuing +2 Management courses at grade 11 and 12 can
                pursue bachelor studies in management, hotel management,
                information technology, travel and tourism, computer science and
                many more. Studying +2 Management level will act as a foundation
                for studying management and teaches you to understand<span
                  id="dots-2"
                  >...</span
                >
                <span id="more-2">
                  how people behave in organizations, and the nature of power,
                  influence and leadership. Students gain knowledge regarding
                  business principles and accounting which will act as the base
                  knowledge later in their higher level.</span
                >
              </p>
              <span id="btn-2" class="more-less" onclick="moreLess(2)"
                >See More</span
              >
            </div>
          </div>
        </div>
        <div class="course-content">
          <img src="../photos/course/humanities.jpg" alt="#" />
          <div class="course-inner-desc">
            <div class="course-inner-desc-top">
              <div>2 Years</div>
            </div>
            <div class="course-inner-desc-bottom">
              <h3>Humanities +2</h3>
              <p>
                Ten Plus Two (+2) Humanities - National Examinations Board
                (NEB): Pursuing Humanities +2 helps us understand others through
                their languages, histories and cultures. They foster social
                justice and equality. And they reveal how people have tried to
                The humanities teach empathy. Make moral, spiritual and
                intellectual sense of the world.<span id="dots-3">...</span>
              </p>
              <span id="more-3">
                <p>
                  Plus two in Humanities is a foundation-level course. It is for
                  those students who want to pursue their undergraduates in mass
                  communication, sociology, English, and another related field
                  of interest. Under the National Examination Board (NEB), the
                  Humanities and Social Sciences stream is a two-year plus
                  two-level foundation course. It comprises an interesting
                  amalgamation of Language studies, Mass communication,
                  Sociology, Psychology, Economics, Marketing/Business
                  Mathematics, Contemporary Society, and the likes, its students
                  gain a holistic approach to education.
                </p>
                <p>
                  Humanities and Social Sciences is failing to attract a good
                  number of students, every year the enrollment in Grade XI
                  humanities is dwindling. Future job prospects and personal
                  interest of students might have played the role of humanities
                  faculty being the least preferred stream among SEE graduates.
                </p>
                <p>
                  Prof. Dr. Bidyanath Koirala, an education expert once said,<b>
                    "Humanities faculty don't know how to sell itself"</b
                  >. The course is old, but students are new to attract the
                  present-day students, the course should be designed to reflect
                  the present times.
                </p></span
              ><span id="btn-3" class="more-less" onclick="moreLess(3)"
                >See More</span
              >
            </div>
          </div>
        </div>
        <div class="course-content">
          <img src="../photos/course/law.jpg" alt="#" />
          <div class="course-inner-desc">
            <div class="course-inner-desc-top">
              <div>2 Years</div>
            </div>
            <div class="course-inner-desc-bottom">
              <h3>Law +2</h3>
              <p>
                Pursuing (+2) program in Law is a two years program offered by
                National Examination Board (NEB). If someone is seeking to start
                their career in the administrative/legal sector then a degree in
                Law provides the perfect platform for putting you on the right
                path. Law is the most exciting and most popular courses for both
                home and international students.<span id="dots-4">...</span>
              </p>
              <span id="more-4">
                <p>
                  It is an instrument to transform static society to dynamic. It
                  is the means to translate the voice of people to access
                  justice in society.Law is an attractive subject and popular
                  choice in any country because of its fantastic career
                  prospects. Nepal is not an exception. The history of the
                  judicial system of Nepal has gone through various phases i.e.
                  un- codified to codified laws: from kingdom to republic, from
                  customary to legislative and From Janga Bhadur’s Muluki Ain to
                  Nepal’s new criminal and Civil code 2075.
                </p>
              </span>
              <span id="btn-4" class="more-less" onclick="moreLess(4)"
                >See More</span
              >
            </div>
          </div>
        </div>
        <div class="course-content">
          <img src="../photos/course/hotel.jpg" alt="#" />
          <div class="course-inner-desc">
            <div class="course-inner-desc-top">
              <div>2 Years</div>
            </div>
            <div class="course-inner-desc-bottom">
              <h3>Hotel Management</h3>
              <p>
                Pursuing+2 in Hotel / Tourism Management course is a customized
                course for those students who are aspiring to have a career in
                hospitality industry. It provides a foundation and dear picture
                about the industry, its functioning, different departments and
                overall observation of hospitality sector. With the maximum
                number of practical and the related theory classes the students
                can already carve their way to be hospitality professionals.
                hospitality outlets.<span id="dots-5">...</span>
              </p>
              <span id="more-5">
                <p>
                  The student will get double benefit by joining the course as
                  they will get +2 in Management with specialization in Hotel or
                  Tourism Management. The aim of 10+2 Hotel Management program
                  is to provide a firm knowledge and understanding of the
                  contemporary hospitality and tourism industries. Students
                  enrolled in this program earn 10+2 (Management). The program
                  is also designed to prepare its graduates to assume
                  entry-level positions in hotels, restaurants, travel agencies
                  and other
                </p>
              </span>
              <span id="btn-5" class="more-less" onclick="moreLess(5)"
                >See More</span
              >
            </div>
          </div>
        </div>
        <div class="course-content">
          <img src="../photos/course/comp.jpg" alt="#" />
          <div class="course-inner-desc">
            <div class="course-inner-desc-top">
              <div>2 Years</div>
            </div>
            <div class="course-inner-desc-bottom">
              <h3>Computer Science +2</h3>
              <p>
                Pursuing +2 in Computer Science is to prepare the foundation for
                higher studies in Computer Science and Information Communication
                Technology concepts like Programming, Algorithms, Database
                Management Systems, Management Information System, Data
                structures, Computer Graphics, Cyber law, Artificial
                intelligence and other BICT related subjects.<span id="dots-6"
                  >...</span
                ><span id="more-6">
                  It also provides theoretical knowledge to the students to
                  build up a deeper understanding and familiarize them with the
                  practical tools and techniques used in the development of
                  computer systems software and technology.</span
                >
              </p>
              <span id="btn-6" class="more-less" onclick="moreLess(6)"
                >See More</span
              >
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer>
    <?php
    include '../template/footer.php';
    ?>
    </footer>
  </body>
</html>
