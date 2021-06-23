<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = filter_var($_POST['requseterName'], FILTER_SANITIZE_STRING);
            $phone = filter_var($_POST['requesterPhone'], FILTER_SANITIZE_NUMBER_INT);
            $email = filter_var($_POST['requesterEmail'], FILTER_SANITIZE_EMAIL);
            $msg = filter_var($_POST['requesterMsg'], FILTER_SANITIZE_STRING);
            }
        $headers = 'From: ' . $email . '</br>';
        $headers .= 'Sender Name: ' . $name . '</br>';
        $headers .= 'Phone Number: ' . $phone . '</br>';
        $msge = 'The Message: ' . $msg;
        mail('mohamed.mojahead@gmail.com', 'Al-fusha Website Register Form', $msg, $headers);
     ?>
<doctype HTML>
  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Al-fusha School</title>
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/bootstrap.css">            
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,800;0,900;1,400&display=swap" rel="stylesheet">
  </head>
  <body>
<div class="text-center" style="text-algin: center;">
   <p> We Got your Request</p>
    <a href="index.html" class="btn myBtn1">Back To Home <i class="fa fa-arrow-left"></i></a>
    <p>
        <?php echo $headers . $msge?>
    </p>
</div>
    </body>
  </html>