<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../classes/databaseconnection.php';
include '../classes/databasehelper.php';

$database = new DatabaseConnection();
$helper = new DatabaseHelper($database);
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
      >Latest Notice:&#160; &#160;Admission Open from PG to Grade IX for 2079
      Academic session.
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
                <li><a href="./academics1.html">School</a></li>
                <li><a href="./academics2.html">U2 (+2)</a></li>
                <li><a href="./academics3.html">College</a></li>
              </ul>
            </li>
            <li><a href="./facilities.html">Features</a></li>
            <li><a href="./notice.php">Notice</a></li>
            <li><a href="./news.html">News & Events</a></li>
            <li><a href="./about-us.html">About Us</a></li>
            <li>
              <a href="#!">Resources</a>
              <ul class="nav-dropdown">
                <li><a href="#!">Alumni</a></li>
                <li><a href="./gallery.html">Gallery</a></li>
                <li><a href="#!">Downloads</a></li>
                <li><a href="./videoppt.html">Video/PPT</a></li>
                <li><a href="./apply.html">How To Apply</a></li>
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

    <!-- notice -->

    <div>
      <h1 class="school-name">Recent Notice</h1>
      <div class="notice-item">
        <p>Published Date: 2022/04/22</p>
        <h4>
          <p>Dear Parents, Namaskar!</p>
          <p>
            Our Final Term Result is scheduled on Baisakh 11, Sunday between
            8:00 to 10:00AM. Best of luck to all the Universalians!
          </p>
        </h4>
      </div>
      <div class="notice-item">
        <p>Published Date: 2022/04/18</p>
        <h4>
          Admission open from PG to Grade IX for Academic session 2079. Apply
          online by clicking link below.
        </h4>
        <a href="https://forms.gle/w2NVia9CNJt4Zmda8" target="_blank"
          >Apply Online
        </a>
      </div>
      <div class="notice-item">
        <p>Published Date: 2022/04/16</p>
        <h4>
          Notice on Final term Break, Result Distribution and Typhoid Vaccine.
        </h4>
        <a
          href="https://drive.google.com/file/d/1EP9mvTHtUfRCFjCXdvzfB6DA4k8mzEir/view?usp=sharing"
          target="_blank"
          >View
        </a>
      </div>
      <?php
        
        $table = 'notice';
        $notices = $helper->getAll($table);

        foreach ($notices as $notice):
        ?>
      <div class="notice-item">
     
          <p>Published Date: <?php echo $notice['publishDate']; ?></p>
          <h4> <?php echo $notice['content']; ?> </h4>
          <?php if (!empty($notice['link'])) : ?>
            <a href="<?php echo $notice['link']; ?>" target="_blank"><?php echo $notice['button']; ?></a>
        <?php endif; ?>

       
      </div>
      <?php endforeach; ?>
    </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="footer-col">
            <h4>Quick Links</h4>
            <ul>
              <li><a href="./about-us.html">About Us</a></li>
              <li><a href="./facilities.html">Features</a></li>
              <li>
                <a href="https://goo.gl/maps/dyzZMA7fmcnWTopd6" target="_blank"
                  >Location</a
                >
              </li>
              <li><a href="./apply.html">Admission</a></li>
            </ul>
          </div>

          <div class="footer-col">
            <h4>Contact</h4>
            <ul>
              <p>
                <li>
                  <p>&#9742; 01-4437545</p>
                </li>
              </p>
              <li>
                <p>
                  <i class="fa fa-phone" style="font-size: 14px"></i>
                  +977-9851072589
                </p>
              </li>
              <li><p>&#9993; infouniversal2022@gmail.com</p></li>
              <li><p>&#9993; support@universalenglishschool.edu.np</p></li>
            </ul>
          </div>

          <div class="footer-col">
            <h4>Address</h4>
            <ul>
              <li><p>Dhumbarahi-4</p></li>
              <li><p>Kathmandu, Nepal</p></li>
              <li><p>P.O.B. No. 10372</p></li>
              <li><p>Voice Mail 1618014437545</p></li>
            </ul>
          </div>

          <div class="footer-col">
            <h4>Follow Us</h4>
            <div class="social-links">
              <a href="https://www.facebook.com/u2universal" target="_blank"
                ><i class="fab fa-facebook-f"></i
              ></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a
                href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=infouniversal2022@gmail.com"
                target="_blank"
                ><i class="fa fa-envelope"></i
              ></a>
              <a
                href="https://www.instagram.com/myuniversalenglishschool/"
                target="_blank"
                ><i class="fab fa-instagram"></i
              ></a>
            </div>
          </div>
        </div>
      </div>

      <hr />
      <p class="copyright">
        &#169;
        <script>
          document.write(new Date().getFullYear());
        </script>
        universal higher secondary school. all rights reserved.
      </p>
    </footer>
  </body>
</html>
