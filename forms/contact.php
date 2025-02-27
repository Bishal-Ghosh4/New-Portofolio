<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

// Load Composer's autoloader
// require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'bishalghosh40422@gmail.com';
$mail->Password = 'zuyouitvrwzaqwid';
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
$mail->isHTML(true);
$mail->setFrom('bishalghosh40422@gmail.com', 'Mailer');
$mail->addAddress('bishalghosh40422@gmail.com','bishal');
$mail->Subject = ("Test Email Using PHPMailer");
$mail->Body = "This is the HTML message body ";
$mail->send();
if($mail->send())
    echo 'Message has been sent';
else
    echo 'Message could not be sent';

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  
  // $contact->smtp = array(
  //   'host' => 'smtp.mailtrap.io',
  //   'username' => 'd58f4135d389bc',
  //   'password' => '76abbeb58a2993',
  //   'port' => '2525'
  // );
  

  // $contact->add_message( $_POST['name'], 'From');
  // $contact->add_message( $_POST['email'], 'Email');
  // if(isset($_POST['phone'])) {
  //   $contact->add_message( $_POST['phone'], 'Phone');
  // }
  // $contact->add_message( $_POST['message'], 'Message', 10);

  // echo $contact->send();
?>
