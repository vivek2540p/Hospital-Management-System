<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    



<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 //Load Composer's autoloader
 require '12/PHPMailer.php';
 require '12/SMTP.php';
 require '12/Exception.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];
    $mobile =$_POST['mobile'];
    $blood =$_POST['blood_g'];
    $city = $_POST['city'];
    $email=$_POST['mail'];
    $pass=$_POST['pass'];
//Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = '21dce144@charusat.edu.in';                     //SMTP username
    $mail->Password   = 'Vivek@@2703';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('21dce144@charusat.edu.in' , 'Hospita Admin');
    $mail->addAddress($email);    
  

    //Content
    $mail->isHTML(true);                                  
    $mail->Subject = 'Registration!';
    $mail->Body    = '<b>your Registration has been successfully done</b>';

    if($mail->send()){
                 echo '<script type="text/javascript">alert("massage sent!")</script>';
        
            }
            else{
                echo '<script type="text/javascript">alert("Try again!")</script>'; 
            }

    



    $server ="localhost";
    $user="root";
    $password="";
    $database="hos_user";
    $conn =mysqli_connect($server,$user,$password,$database);
    if(!$conn){
        die("did not connect" . mysql_connect_error());
    }
    else{
        $sql="INSERT INTO `user` (`name`, `mobile`, `blood_g`, `city`, `mail`, `pass`) VALUES ('$name', '$mobile', '$blood', '$city', '$email', '$pass')";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success</strong> you have resister success fully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
          $sql="SELECT * FROM `user`";
        $result=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($result);

          echo "for Login click here";
          echo "your Id is    $num    ";
         echo ' <a href="./login_page.html" target="_blank" >Login</a> ';
          
        }
    }
    

}


?>
</body>
</html>