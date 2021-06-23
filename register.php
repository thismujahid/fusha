<?php 
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = filter_var($_POST['namefromregister'], FILTER_SANITIZE_STRING);
  $phone = filter_var($_POST['phonenumberregister'], FILTER_SANITIZE_NUMBER_INT);
  $email = filter_var($_POST['emailregister'], FILTER_SANITIZE_EMAIL);
  $formErrors = array();

  if(strlen($name) <= 5){
    $formErrors[] = 'User Name Must Be equal or Greater Than 3 Cases Plz Click on The Below Button </p><a href="index.html#register" class="btn myBtn1">Try Again <i class="fa fa-envelope"></i></a>';
  }
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
          if (! empty($formErrors)) {
                    foreach ($formErrors as $key) {
              echo '<p>' . $key;      
            }
          };
            if(empty($formErrors)){
      $headers = 'From: ' . $email . '</br>';
      $headers .= 'Sender Name: ' . $name . '</br>';
      $headers .= 'Phone Number: ' . $phone . '</br>';
      $msg = 'I Need To Register In Your Class Plz Contact Me';
      mail('mohamed.mojahead@gmail.com', 'Al-fusha Website Register Form', $msg, $headers);
      echo '<p>Success, your message is Send To us Thank You For Contact Us We Will replay in afew Hours </p> <a href="index.html" class="btn myBtn1">Back To Home <i class="fa fa-arrow-left"></i></a>';
    echo '<p>' . $headers . $msg . '</p>';
    }
     ?>
    </div>
    </body>
  </html>