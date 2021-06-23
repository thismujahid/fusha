<?php 
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
  $msg = filter_var($_POST['feedback'], FILTER_SANITIZE_STRING);
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Al-Fusha</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/fontawesome.css">
  <link rel="stylesheet" href="css/main.css">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,800;0,900;1,400&display=swap" rel="stylesheet">
</head>
<body>
  <!-- Start LandingPage -->
  <div class="landing-page aboutus">
    <div class="ovarlay"></div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
      <a class="navbar-brand logo" href="index.html">Alfusha School</a>
      <button class="btn toggleNav navbar-toggler"><i class="fas fa-bars"></i></button>
      <div class="collapse navbar-collapse navLinks  d-none d-lg-block" id="navbarSupportedContent">
      <ul class="navbar-nav">
         <li class="nav-item">
              <a class="nav-link" href="index.html#contact"><span class="contact-btn">Contact Us <i class="far fa-paper-plane"></i></span></a>
            </li>
                <li class="nav-item">
                  <a class="nav-link" href="courses.html"><span>Courses <i class="fas fa-play"></i></span></a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link" href="plan-prices.html"><span>Plan Prices <i class="fas fa-table"></i></span></a>
                  </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html"><span>About <i class="fas fa-address-card"></i></span></a>
           </li>
           <li class="nav-item">
            <a class="nav-link" href="index.html"><span>Home <i class="fas fa-home"></i></span></a>
           </li>
            
        </ul>
      </div>
      </nav>
      <!-- Start Fixed Nav -->
      <nav class="navbar fixed-nav navbar-expand-lg navbar-light bg-light">
        <div class="container">
        <a class="navbar-brand logo" href="#">Alfusha School</a>
        <button class="btn myBtn2 toggleNav navbar-toggler"><i class="fas fa-bars"></i></button>
        <div class="collapse navbar-collapse navLinks" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" href="index.html#contact"><span class="contact-btn">Contact Us <i class="far fa-paper-plane"></i></span></a>
            </li>
                <li class="nav-item">
                  <a class="nav-link" href="courses.html"><span>Courses <i class="fas fa-play"></i></span></a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link" href="plan-prices.html"><span>Plan Prices <i class="fas fa-table"></i></span></a>
                  </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html"><span>About <i class="fas fa-address-card"></i></span></a>
           </li>
           <li class="nav-item">
            <a class="nav-link" href="index.html"><span>Home <i class="fas fa-home"></i></span></a>
           </li>
            
        </ul>
        </div>
        </nav>
        <!-- End Fixed Nav -->
        <!-- Start Nav In Small Devices -->
        <div class="nav-menu-fixed">
            <div class="nav-container">
              <div class="closer"><i class="fas fa-window-close"></i></div>
              <div class="logo">
               <a href="index.html"><img src="imgs/logo.svg" alt="Logo"></a> 
              </div>
              <div class="links">
              <a href="index.html" ><i class="fas fa-home"></i> Home </a>
              <a href="about.html"><i class="fas fa-address-card"></i> About Us</a>
              <a href="plan-prices.html"><i class="fas fa-table"></i> Plan Prices</a>
              <a href="courses.html"><i class="fas fa-play"></i> Courses</a>
              <a href="#" class="custom" data-link="#contact"><i class="far fa-paper-plane"></i> Conatct Us</a>
              <a href="./terms.html" class="ter-link"><i class="fas fa-clipboard-list"></i> Terms & Conditions</a>
                </div>
            </div>
          </div>
        <!-- Start Nav In Small Devices -->
      <!-- Start About Content -->
        <div class="about-contant courses-content">
          <h2>Courses Details</h2>
          <div class="breadcramb">
            <a href="index.html">Home</a> / <a href="courses.html">Courses</a> / <a href="courses-detials.html">Course Details</a>
          </div>
        </div>
      <!-- End About Content -->
    </div>
  </div>
  <!-- End LandingPage -->
  <!-- Start Course Detials -->
  <div class="course-detials">
      <div class="container">
          <div class="row">
              <div class="col-lg-8">
                <div class="detials-area">
                    <div class="course-image">
                        <img src="imgs/course-details.jpg" alt="Photo Course" class="w-100">
                    </div>
                    <div class="Objectives">
                        <h4>Objectives</h4>
                        <p>
                            When you enter into any new area of science, you almost always find yourself with a baffling new language of technical terms to learn before you can converse with the experts. This is certainly true in astronomy both in terms of terms that refer to the cosmos and terms that describe the tools of the trade, the most prevalent being the telescope.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.
                        </p>
                    </div>
                    <div class="Eligibility">
                        <h4>Eligibility</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.
                        </p>
                    </div>
                    <div class="course-plan">
                        <h4>Course Outline</h4>
                        <ul class="list-unstyled">
                            <li>
                                <p class="float-left">Introduction Lesson</p> <button class="float-right btn myBtn2 viwe-details">Viwe Detials</button>
                                <p class="lesson-d fix">
                                    <span class="msg">Reclick On Viwe Deatils Button To Hidde Details</span><br>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt laboriosam veniam aspernatur delectus dolore corporis maxime temporibus nihil tempore fugiat? Debitis iste obcaecati alias tempore.
                                </p>
                            </li>
                            <div class="fix"></div>
                            <li>
                                <p class="float-left">Frist Lesson</p> <button class="float-right btn myBtn2 viwe-details">Viwe Detials</button>
                                <p class="lesson-d fix">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt laboriosam veniam aspernatur delectus dolore corporis maxime temporibus nihil tempore fugiat? Debitis iste obcaecati alias tempore.
                                </p>
                            </li>
                            <div class="fix"></div>
                            <li>
                                <p class="float-left">Second Lesson</p> <button class="float-right btn myBtn2 viwe-details">Viwe Detials</button>
                                <p class="lesson-d fix">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt laboriosam veniam aspernatur delectus dolore corporis maxime temporibus nihil tempore fugiat? Debitis iste obcaecati alias tempore.
                                </p>
                            </li>
                            <div class="fix"></div>
                            <li>
                                <p class="float-left">Demo Lesson</p> <button class="float-right btn myBtn2 viwe-details">Viwe Detials</button>
                                <p class="lesson-d fix">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt laboriosam veniam aspernatur delectus dolore corporis maxime temporibus nihil tempore fugiat? Debitis iste obcaecati alias tempore.
                                </p>
                            </li>
                            <div class="fix"></div>
                            <li>
                                <p class="float-left">Bla Bla Bla Lesson</p> <button class="float-right btn myBtn2 viwe-details">Viwe Detials</button>
                                <p class="lesson-d fix">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt laboriosam veniam aspernatur delectus dolore corporis maxime temporibus nihil tempore fugiat? Debitis iste obcaecati alias tempore.
                                </p>
                            </li>
                            <div class="fix"></div>
                            <li>
                                <p class="float-left">Exam Number One</p> <button class="float-right btn myBtn2 viwe-details">Viwe Detials</button>
                                <p class="lesson-d fix">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt laboriosam veniam aspernatur delectus dolore corporis maxime temporibus nihil tempore fugiat? Debitis iste obcaecati alias tempore.
                                </p>
                            </li>
                            <div class="fix"></div>
                            <li>
                                <p class="float-left">Ninga Lesson</p> <button class="float-right btn myBtn2 viwe-details">Viwe Detials</button>
                                <p class="lesson-d fix">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt laboriosam veniam aspernatur delectus dolore corporis maxime temporibus nihil tempore fugiat? Debitis iste obcaecati alias tempore.
                                </p>
                            </li>
                            <div class="fix"></div>
                            <li>
                                <p class="float-left">Spider Man Lesson</p> <button class="float-right btn myBtn2 viwe-details">Viwe Detials</button>
                                <p class="lesson-d fix">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt laboriosam veniam aspernatur delectus dolore corporis maxime temporibus nihil tempore fugiat? Debitis iste obcaecati alias tempore.
                                </p>
                            </li>
                            <div class="fix"></div>
                        </ul>
                    </div>
                </div>
            </div>
              <div class="col-lg-4">
                  <div class="course-info">
                      <div class="bisc-info">
                          <h4>Course Info</h4>
                          <ul class="list-unstyled">
                            <li><p class="float-left">Course Name</p> <p class="float-right">Name</p></li>
                              <li><p class="float-left">Trainer's Name</p> <p class="float-right"><a href="https://t.me/muojahead" target="_blank">Mohammed Mujahid</a></p></li>
                              <div class="fix"></div>
                              <li><p class="float-left">Course Fee</p> <p class="float-right" id="c-price">$230</p></li>
                              <div class="fix"></div>
                              <li><p class="float-left">Avilabele Steas</p> <p class="float-right" id="place">15</p></li>
                              <div class="fix"></div>
                              <li><p class="float-left">Schdule</p> <p class="float-right"><span id="start-time"></span> To <span id="end-time"></span></p></li>
                          </ul>
                          <button class="btn myBtn2 w-100 viwe-form" id="">Enroll Course</button>
                      </div>
                      <div class="enroll-box" id="enroll-box">
                        <div class="contact">
                      <form method="POST" action="contact.php">
                      <div class="closer"><i class="fas fa-window-close"></i></div>
              <div class="custom-input w-100">
                <input type="text" name="username" id="userName" autocomplete="off">
                <label for="userName" class="data">Your Name</label>
                <i class="far fa-check-circle"></i>
                <i class="far fa-times-circle x"></i>
              </div>
              <div class="custom-input w-100">
                <input type="email" name="email" id="emailaddress" autocomplete="off">
                <label for="emailaddress" class="data">Your E-mail</label>
                <i class="far fa-check-circle"></i>
                <i class="far fa-times-circle x"></i>
              </div>  
              <div class="custom-input w-100">
                <input type="number" name="phonenumber" id="phoneNumber"  autocomplete="off">
                <label for="phoneNumber" class="data">Your Phone Number</label>
                <i class="far fa-check-circle"></i>
                <i class="far fa-times-circle x"></i>
            </div>
            <div class="select-menu fas w-100">
              <select name="course" id="course" >
                <option value="" selected disabled>Select Course</option>
                <option value="Qura'an">Qura'an</option>
                <option value="Hadith">Hadith</option>
                <option value="Hadith">Hadith</option>
                <option value="Hadith">Hadith</option>
                <option value="Hadith">Hadith</option>
              </select>
              <i class="far fa-check-circle"></i>
              <i class="far fa-times-circle x"></i>
            </div>  
            <div class="massage">
              <textarea name="theMassage" id="msg" autocomplete="off" style="resize: none;"></textarea>
              <label for="msg">If You Have an Question Type Your Question Here</label>
              <i class="far fa-check-circle"></i>
              <i class="far fa-times-circle x"></i>
            </div>
            <div class="submit">
            <button type="submit"  class="btn myBtn11">Send Information <i class="fab fa-telegram"></i></button>
            </div>
          </form>
          </div>
                      </div>
                      <div class="reviwes">
                          <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" id="comment_form">
                              <h4>Add Your Feedback</h4>
                              <input type="text" name="username" required placeholder="Your Name">
                              <textarea name="feedback" minlength="15" required id="comment_message" placeholder="Your Feedback"  onfocus="placeholder='You only have 150 characters'" onblur="placeholder='Your Feedback'" maxlength="150"></textarea>
                              <span id="counter"></span>
                              <button type="submit" class="btn myBtn2 w-100">Send Feedback</button>
                          </form>
                          <div class="feedbacks">
                              <h4>People Feedbacks</h4>
                          <?php 
                          if(isset($username)){
                            echo '                            <div class="row">
                            <div class="col-sm-2 col-md-1 col-lg-2 text-center">
                          <i class="fa fa-user fa-3x"></i>
                          </div>
                          <div class="col-sm-10 col-md-11 col-lg-10">
                          <div class="feedback">
                            <h5 class="name">'. $username .'
                            </h5>';
                          }
                            if(isset($msg)){
                            echo '<p>'. $msg.'</p></div>
                          </div>
                          </div>';
                          }
                          ?>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- End Course Detials -->
<!-- Start Contact Us and Footer -->
<div class="contact" id="contact" data-link="contact">
    <div class="container">
      <div class="info">
        <h2 class="wow fadeInRight" data-wow-duration="1.5s">
          Contact Us
        </h2>
      </div>

      <div class="row">

        <div class="col-md-7">
        <form method="POST" action="contact.php">
              <div class="custom-input w-100">
                <input type="text" name="username" id="userName" autocomplete="off">
                <label for="userName" class="data">Your Name</label>
              </div>
              <div class="custom-input w-100">
                <input type="email" name="email" id="emailaddress" autocomplete="off">
                <label for="emailaddress" class="data">Your E-mail</label>
              </div>  
              <div class="custom-input w-100">
                <input type="number" name="phonenumber" id="phoneNumber"  autocomplete="off">
                <label for="phoneNumber" class="data">Your Phone Number</label>
            </div>
            <div class="select-menu fas w-100">
              <select name="course" id="course" >
                <option value="" selected disabled>Select Course</option>
                <option value="Qura'an">Qura'an</option>
                <option value="Hadith">Hadith</option>
                <option value="Hadith">Hadith</option>
                <option value="Hadith">Hadith</option>
                <option value="Hadith">Hadith</option>
              </select>
            </div>  
            <div class="massage">
              <textarea name="theMassage" id="msg" autocomplete="off" style="resize: none;"></textarea>
              <label for="msg">Your Message</label>
            </div>
            <div class="submit">
            <button type="submit"  class="btn myBtn11">SUBMIT <i class="far fa-paper-plane"></i></button>
            </div>
          </form>
        </div>
        <div class="col-md-5 contact-info">
          <div class="addres wow fadeInRight" data-wow-duration="1.5s" data-wow-delay=".4s">
            <i class="fa fa-map-marker"></i> Cairo, Egypt
          </div>
          <div class="phone wow fadeInRight" data-wow-duration="1.5s" data-wow-delay=".7s">
            <i class="fa fa-phone"></i> +012012012012012
          </div>
          <div class="email wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="1s">
            <i class="fa fa-envelope-open"></i> support@alfushaschool.com
          </div>
          <div class="social">
            <a href="#"class="wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="1.2s"><i class="fab fa-facebook"></i></a>
            <a href="#" class="wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="1.4s"><i class="fab fa-twitter"></i></a>
            <a href="#" class="wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="1.8s"><i class="fab fa-instagram"></i></a>
            <a href="#" class="wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="2s"><i class="fab fa-whatsapp"></i></a>
          </div>
          <div class="map wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="2.4s">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6888.583178251251!2d30.854695174560554!3d30.314222811205585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145889dea7dd7bf1%3A0xa08383f9b2f25cf7!2z2YXYs9is2K8g2LnZhdixINi52KjYryDYp9mE2LnYstmK2LI!5e0!3m2!1sar!2seg!4v1602452255598!5m2!1sar!2seg" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Us and Footer -->
  <footer>
      <div class="text-center">
        <p style="margin: 0;">
        Created With <i class="fa fa-heart" style="color:red"></i> By <a href="../index.html" target="_blank">Mohamed Mojahed</a>
        </p>
      </div>
    </footer>
    <!-- Footer -->
  <!-- Start Back to top -->
  <div class="back">
    <div class="button">
      <i class="fas fa-arrow-circle-up"></i>
    </div>
  </div>
  <!-- End Back to top -->
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/control.js"></script>
</body>
</html>