<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function


require('PHPMailer/Exception.php');
require('PHPMailer/SMTP.php');
require('PHPMailer/PHPMailer.php');
if(isset($_REQUEST['sub'])){

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);


    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = '21cs012@charusat.edu.in';                     //SMTP username
    $mail->Password   = 'cobra0070';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('21cs012@charusat.edu.in', 'cobra 07');
    $mail->addAddress('vivekkothiya6@gmail.com');    
  

    //Content
    $mail->isHTML(true);                                  
    $mail->Subject = 'Registration!';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';

    if($mail->send()){
                 echo '<script type="text/javascript">alert("massage sent!")</script>';
        
            }
            else{
                echo '<script type="text/javascript">alert("Try again!")</script>'; 
            }
}

?>


