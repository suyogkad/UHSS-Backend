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

    <div class="facility">
      <h1 class="facility-heading school-name">Features</h1>
      <div class="home-description">
        <img class="home-description-img" src="../photos/medical.JPG" alt="#" />
        <div class="home-description-inner">
          <h1>Medical</h1>
          <p>
            &quot;Healthy body harbors healthy mind.&quot; The school provides
            first aid facilities and other necessary medicines if need be. We
            are always alert and effortful to maintain neat and tidy, and
            healthy environment so as to minimize the chances of injuries and
            sickness in the school premises.<span id="dots-1">...</span>
            <span id="more-1">
              We have the provision of calling the doctor at the regular
              interval. We also run the health camps and other health related
              programmes.</span
            >
          </p>
          <span id="btn-1" class="more-less" onclick="moreLess(1)"
            >See More</span
          >
        </div>
      </div>
      <div class="home-description">
        <img class="home-description-img" src="../photos/clab.JPG" alt="#" />
        <div class="home-description-inner">
          <h1>Computer Lab</h1>
          <p>
            It has become an integral part of the modern academic institution.
            Therefore, we have offered computer classes from std. III to std. X.
            To facilitate students further, we have the well-equipped lab with
            sufficient no. of computers and a number of computer related
            books.<span id="dots-2">...</span
            ><span id="more-2">
              As the part of learning, students are offered an access to e-mail
              and internet. By standard X, students will get an
              extra-certificate on computer as per the course they have
              selected. They will be certified by a recognized IT
              institute.</span
            >
          </p>
          <span id="btn-2" class="more-less" onclick="moreLess(2)"
            >See More</span
          >
        </div>
      </div>
      <div class="home-description">
        <img
          class="home-description-img"
          src="../photos/facilities.JPG"
          alt="#"
        />
        <div class="home-description-inner">
          <h1>Transportation</h1>
          <p>
            We offer transportation facilities to the students on the need
            basis. It further facilitates us to carry on various programmes like
            excursion, field trip, picnic, tour, site visit, etc.
          </p>
        </div>
      </div>
      <div class="home-description">
        <img
          class="home-description-img"
          src="../photos/audiovisual.JPG"
          alt="#"
        />
        <div class="home-description-inner">
          <h1>Audio, Audio-Visual And Multimedia</h1>
          <p>
            An audio and audio-visual ward is furnished with all the necessary
            materials and logistic support to offer maximum exposure to the
            subject&#39;s students are concerned with. It has also been of great
            help to the students in being acquainted with English, Science,
            Geography, language and literature.<span id="dots-3">...</span
            ><span id="more-3">
              Regular audio-cum audio visual classes are offered to students to
              improve their listening and other skills. Multi-media- based
              classes are offered to the students with the motives of boosting
              up quick learning, making teaching-learning edutaining and address
              a bigger mass at a time.</span
            >
          </p>
          <span id="btn-3" class="more-less" onclick="moreLess(3)"
            >See More</span
          >
        </div>
      </div>
      <div class="home-description">
        <img class="home-description-img" src="../img/1111.jpg" alt="#" />
        <div class="home-description-inner">
          <h1>Hostel</h1>
          <p>
            There is a separate block to accommodate boarder students. The
            hostel superintendent and tutors are appointed to take care of
            boarders. Each child is provided with individual space and shelf for
            clothes and items of personal use. They get a balanced and
            nourishing diet in time. Parents can come and see the student once
            in a month.<span id="dots-4">...</span
            ><span id="more-4">
              Students are not allowed to keep any valuables, medicines and cash
              without permission from the Principal or the Hostel
              Superintendent. They are also expected to carry out certain
              responsibilities on their own. Students are supposed to be in the
              prescribed hostel uniform.</span
            >
          </p>
          <span id="btn-4" class="more-less" onclick="moreLess(4)"
            >See More</span
          >
        </div>
      </div>
      <div class="home-description">
        <img class="home-description-img" src="../img/f.jpg" alt="#" />
        <div class="home-description-inner">
          <h1>Games & Sports</h1>
          <p>
            It is the fact known to all that a healthy body harbours a healthy
            mind. Therefore, a games and sports division is designed to offer
            students physical and mental exercises. They also entertain and
            refresh them a great deal. More than 35 varieties of games and
            sports are available for the students of our school.<span
              id="dots-5"
              >...</span
            ><span id="more-5">
              Annual Sports Week is also organized to encourage students to
              develop their skills and talent.</span
            >
          </p>
          <span id="btn-5" class="more-less" onclick="moreLess(5)"
            >See More</span
          >
        </div>
      </div>
      <div class="home-description">
        <img class="home-description-img" src="../img/lib.jpg" alt="#" />
        <div class="home-description-inner">
          <h1>Library</h1>
          <p>
            The school library consists of a number of educational and
            entertaining books and magazines. In addition, students can read
            journals, magazines and other reference books in the reading room.
            Further, as we have become the institutional member of the British
            Council, students can re-issue various books borrowed from the
            council.<span id="dots-6">...</span
            ><span id="more-6">
              Students are encouraged to become the British Council member or a
              member of any good library in their locality or elsewhere to gain
              further knowledge. Teachers have a separate library section that
              enables them to become more resourceful and therefore to become
              more effective in teaching-learning. We do own even an
              e-library.</span
            >
          </p>
          <span id="btn-6" class="more-less" onclick="moreLess(6)"
            >See More</span
          >
        </div>
      </div>
      <div class="home-description">
        <img class="home-description-img" src="../photos/lab.jpg" alt="#" />
        <div class="home-description-inner">
          <h1>Laboratory</h1>
          <p>
            We remember only 10 to 15% of what we hear. We remember only about
            40% of what we hear and see. But we remember more than 80% of what
            we hear, see and do. Therefore, the school has managed a well
            furnished and equipped laboratory to conduct the experiments related
            to science, environmental studies and others.<span id="dots-7"
              >...</span
            ><span id="more-7">
              For the very purposes, the school has managed a well-equipped
              laboratory to conduct all the experiments that are needed.</span
            >
          </p>
          <span id="btn-7" class="more-less" onclick="moreLess(7)"
            >See More</span
          >
        </div>
      </div>
      <div class="home-description">
        <img class="home-description-img" src="../photos/ec.JPG" alt="#" />
        <div class="home-description-inner">
          <h1>CO- & Extra Curricular Activities</h1>
          <p>
            Variety in teaching has been a must because the modern world seeks
            specialization. In addition to curricular activities, co- and
            extra-curricular activities in a school can help students achieve
            specialization in their desired field. They help them to bring out
            their latent <span id="dots-8">...</span
            ><span id="more-8">
              talent. To induce their talent, we organize and conduct in various
              ways.</span
            >
          </p>
          <span id="btn-8" class="more-less" onclick="moreLess(8)"
            >See More</span
          >
        </div>
      </div>

      <footer>
    <?php
    include '../template/footer.php';
    ?>
    </footer>
    </div>
  </body>
</html>
