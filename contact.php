<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
  $telephone = filter_var($_POST['phonenumber'], FILTER_SANITIZE_NUMBER_INT);
  $eleemail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  $course = $_POST['course'];
  $msg = filter_var($_POST['theMassage'], FILTER_SANITIZE_STRING);

  $bigFormErrors = array();

  if(strlen($username) < 3){
    $bigFormErrors[] = 'User Name Must Be equal or Greater Than 3 Cases Plz Click on The Below Button </p><a href="index.html#contact" class="btn myBtn1">Try Again <i class="fa fa-envelope"></i></a>';
  }if(strlen($telephone) == ''){
    $bigFormErrors[] = 'You Must Type the Phone Number Plz Click on The Below Button </p><a href="index.html#contact" class="btn myBtn1">Try Again <i class="fa fa-envelope"></i></a>';
  }
  // if(strlen($telephone) != '' && strlen($username) > 3){
  //   $bigFormErrors[] = '<i class="fa fa-close"></i>;
  //   }

  }
?>
<doctype HTML>
  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Al-fusha School</title>
  <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,800;0,900;1,400&display=swap" rel="stylesheet">
    <style>
      body{
        background-color: var(--second-color)
      }
      .contact-php{
        text-align: center;
        color: var(--frist-color);
      }
      .errors{
        text-align: center;
      }
      .errors p{
        padding: 0 20px;
        font-size: 18px;
        color: #000;
      }
      .errors a{
        margin-top: 50px
      }
      .errors .myBtn1:hover{
        color: var(--frist-color) !important;
      }
      .errors .myBtn1 i{
        transform: rotate(360deg) scale(.8);
        -webkit-transform: rotate(360deg) scale(.8);
        -o-transform: rotate(360deg) scale(.8);
        -moz-transform: rotate(360deg) scale(.8);
        transition: .3s linear;
        -webkit-transition: .3s linear;
        -moz-transition: .3s linear;
        -o-transition: .3s linear;
      }
      .errors .myBtn1:hover i{
        transform: rotate(0deg) scale(1);
        -webkit-transform: rotate(0deg) scale(1);
        -o-transform: rotate(0deg) scale(1);
        -moz-transform: rotate(0deg) scale(1);
      }
    </style>
  </head>
  <body>
    <div>
     <h1 class="contact-php">Contact Status</h1>
    </div>
    <div class="errors">
    <?php 
            foreach ($bigFormErrors as $key) {
      echo '<p>' . $key;
    };
        if(empty($bigFormErrors)){
      $headers = 'From: ' . $eleemail . '</br>';
      $headers .= 'Sender Name: ' . $username . '</br>';
      $headers .= 'Phone Number: ' . $telephone . '</br>';
      $headers .= 'Course Needed: ' . $course . '</br>';
      mail('mohamed.mojahead@gmail.com', 'Al-fusha Website Contact Form', $msg, $headers);
      echo '<p>Success, your message is Send To us Thank You For Contact Us We Will replay in afew Hours </p> <a href="index.html" class="btn myBtn1">Back To Home <i class="fa fa-arrow-left"></i></a>';
    }
     ?>

    </div>
    </body>
  </html>