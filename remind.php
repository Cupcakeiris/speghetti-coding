<?php
include('db.php');
include 'log.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

  $query = "SELECT * FROM reserve";
  $result = mysqli_query($conn, $query);

  


  while($row = mysqli_fetch_array($result))
  {
    $attribute = $row['email'];
    $attribute = str_replace(".", "", $attribute);
    if (isset($_POST[$attribute])){

      $mail = new PHPMailer(true);

      try {
          //Server settings

          $mail->isSMTP();                                            //Send using SMTP
          $mail->SMTPDebug = 3;
          $mail->SMTPKeepAlive = true;
          $mail->Mailer = “smtp”;
          $mail->Host       = 'smtp.gmail.com';                 //Set the SMTP server to send through
          $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
          $mail->Username   = 'for.nis.pc@example.com';                     //SMTP username
          $mail->Password   = 'Qqwerty1!!';                               //SMTP password
          $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;          //Enable implicit TLS encryption
          $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
      
          //Recipients
          $mail->setFrom('for.nis.pc@gmail.com', 'Mailer');
          $mail->addAddress($row['email']);               //Name is optional     
          //Content
          $mail->isHTML(true);                                  //Set email format to HTML
          $mail->Subject = 'Book reservation';
          $mail->Body    = 'You have received this reminder since you reserved book from <b>NIS Library</b>
                            <p>Please, do not forget to return books on time!</p>';
      
          $mail->send();

          echo 'Message has been sent';
      } catch (Exception $e) {
          echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      }
break;


}
  }

?>
