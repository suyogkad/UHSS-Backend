<?php

include './template/header.php';

?>
<div id="imageSlider" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#imageSlider" data-slide-to="0" class="active"></li>
    <li data-target="#imageSlider" data-slide-to="1"></li>
    <li data-target="#imageSlider" data-slide-to="2"></li>
    <li data-target="#imageSlider" data-slide-to="3"></li>  
    <li data-target="#imageSlider" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="3000" style="background-image: url('./img/viber_image_2022-04-17_21-07-36-586.jpg')"></div>
    <div class="carousel-item" data-interval="3000" style="background-image: url('./img/viber_image_2022-04-17_22-51-11-909.jpg')"></div>
    <div class="carousel-item" data-interval="3000" style="background-image: url('./img/viber_image_2022-04-17_22-51-25-482.jpg')"></div>
    <div class="carousel-item" data-interval="3000" style="background-image: url('./photos/Academics/DSC_0104.JPG')"></div>
    <div class="carousel-item" data-interval="3000" style="background-image: url('./photos/Academics/84095488_3056810631017702_713368611594436608_n.jpg')"></div>
  </div>
  <a class="carousel-control-prev" href="#imageSlider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#imageSlider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


    <!-- Modal -->
    <?php
        $images = $helper->getAll('modal');
        $lastImage = end($images);
        if (isset($lastImage['photo'])) {
          $lastImageURL = str_replace('..','.',$lastImage['photo']);
        }

        if (!empty($lastImageURL)):
        ?>
    <div id="index-modal" class="modal-content" style="display: block">
      <span class="close-modal" style="color: white">&times;</span>
      <img src="<?php  echo $lastImageURL; ?>" alt="#" />
    </div>

    <?php endif; ?>

    <!-- Home Page Description -->
    <div class="home-description">
      <div class="home-description-inner">
        <h1 style="text-align: center">Welcome to</h1>
        <h1 style="text-align: center" class="school-name">
          Universal Higher Secondary School
        </h1>
        <p>
          Universal Higher Secondary School, established in 2049 B.S., is the
          academic shrine for all meritorious and promising children who
          genuinely desire a meaningful life. One of the visions of this English
          medium school is to impart education to serve humanity because service
          to mankind is service to God. It dedicates itself to providing
          excellence, glory and militancy to students. It further aims at the
          all-round development, i.e. intellectual, physical, social and
          spiritual: a holistic approach of teaching. It helps students excavate
          best out of their life.<span id="dots-8">...</span>
        </p>
        <span id="more-8">
          <p>
            Our text books, curricula, methods and environment are highly
            student-oriented: a child-centered approach. We follow a well-graded
            language books direct method, and communicative approach in teaching
            the language. As to teaching L2, our teachers act as facilitators to
            a great possible extent.
          </p>

          <p>
            The school strives diligently to shape the character of children in
            accordance with their talent. It follows the mode from general to
            special to cope with ever growing competitive and interdependent
            world. Students are facilitated to integrate their thoughts, words
            and action and also to bring out an awareness of discipline, duty
            and devotion at the same time. We believe in dedication, excellence
            and celebration.
          </p>
          <p>
            We lay emphasis on the holistic approach of teaching to have the
            balanced development of a student.
          </p>
          <p>
            At the same time, we are both eclectic and interdisciplinary in
            selection and the implementation of the teaching learning methods
            and strategies.
          </p></span
        >
        <span id="btn-8" class="more-less" onclick="moreLess(8)">See More</span>
      </div>
    </div>

    <div class="ach-mis-vis">
      <a href="./common/about-us.html" style="text-decoration: none">
        <div class="vis">
          <i class="fa-solid fa-eye"></i>
          <span>Vision</span>
        </div>
      </a>

      <a href="./common/about-us.html" style="text-decoration: none">
        <div class="mis">
          <i class="fa-solid fa-bullseye"></i><span>Mission</span>
        </div>
      </a>
      <a href="./common/about-us.html" style="text-decoration: none">
        <div class="ach">
          <i class="fa-solid fa-trophy"></i><span>Achievements</span>
        </div>
      </a>
    </div>

    <!-- Principle Message -->
    <div class="home-description">
      <img
        class="home-description-img"
        src="./img/principle-photo.jpg"
        alt="principle-image"
      />
      <!-- Message Content -->
      <div class="home-description-inner">
        <h1 class="school-name">Message from Principal</h1>
        <p>Dear Students,</p>
        <p>
          First of all, on behalf of Universal Higher Secondary School as well
          as person ally, I would like to extend my heart-felt welcome to all
          the future stars who are eagerly, diligently and wisely making an
          effort to build up their future by learning and earning the quality
          education. Quality education is not a matter of luck but the matter of
          effort and choice. As rightly said by Florence Nightingale, the first
          need to accomplish is not planning but the commitment. By this I mean
          we are committed to quality education and what we expect from students
          is their commitment and then planning plus. We want our students to
          become an excellent thinker, an excellent planner and an excellent
          performer coupled with vision, mission, objectives and strategies. We
          ever wish to see them as leaders in the field concerned.<span
            id="dots-9"
            >...</span
          >
        </p>
        <span id="more-9">
          <p>
            We welcome all the meritorious students to join U2 BBS programme
            because we believe in what Shiv Kehra has said, &quot;Winners
            don&#39;t do different things but they do things differently.&quot;
            Therefore, we offer you BBS with BBA flavor. In other words, we
            focus on the skills, higher abilities, creative and critical
            thinking, inventive and innovative methods so that our students can
            be the jack of all trades and the master of one in the true sense
            and so that they can groom themselves as inspirational leaders
            professionally as well as personally. We lay emphasis not on giving
            the fish but in teaching them how to fish so that they can create
            the win-win situation.
          </p>
          <p>
            We are well-equipped both in software and hardware to pursue all the
            programmes of ours in sustainable, inspirational, professional and
            rewarding ways. We believe in, &quot;Hope for the best but prepare
            for the worst.&quot;
          </p>
          <p>Ever looking forward to everything positive in life!</p>
        </span>
        <span id="btn-9" class="more-less" onclick="moreLess(9)">See More</span>
      </div>
    </div>

    <div class="index-review">
      <div class="teachers">
        <h1>25+</h1>
        <h2>Teachers</h2>
      </div>
      <div class="students">
        <h1>800+</h1>
        <h2>Students</h2>
      </div>
      <div class="courses">
        <h1>18+</h1>
        <h2>Courses</h2>
      </div>
      <div class="experience">
        <h1>29+</h1>
        <h2>Years of Experience</h2>
      </div>
    </div>

    <!-- google reviews section -->

    <div class="testimonials">
      <div class="inner">
        <h1>Google Reviews</h1>
        <div class="border"></div>

        <div class="row">
          <div class="col">
            <div class="testimonials">
              <img src="./photos/reviews/kabya.png" alt="#" />

              <div class="name">Kabya Limbu</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <p>One of the best schools.❣️❣️💖</p>
              <br>
              <br>
              <br>
            </div>
          </div>

          <div class="col">
            <div class="testimonials">
              <img src="./photos/reviews/rabin.png" alt="#" />

              <div class="name">Rabin Chapagain</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <p>Universal HSS is one of the best School in Kathmandu.</p>
              <br>
              <br>
            </div>
          </div>

          <div class="col">
            <div class="testimonials">
              <img src="./photos/reviews/rajesh.png" alt="#" />

              <div class="name">rajesh mitra</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <p>
                Best School I have ever seen. Once upon a time I worked as a
                Teacher in this school which was during 1998-99.
                <br>
                <br>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- end of google reviews section -->

    <?php
    
    include './template/footer.php';
    ?>
 
