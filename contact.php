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

if($_SERVER['REQUEST_METHOD']=='POST'){
    $mail=$_POST['email'];
    $num=$_POST['number'];
    $mess=$_POST['message'];


    $server ="localhost";
    $user="root";
    $password="";
    $database="hos_user";
    $conn =mysqli_connect($server,$user,$password,$database);
    if(!$conn){
        die("did not connect" . mysql_connect_error());
    }
    else{
        $sql="INSERT INTO `contact` ( `email`, `number`, `message`) VALUES ( '$mail', '$num', '$mess')";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success</strong> you have resister success fully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';

          echo "for home page click here";
         echo ' <a href="./index.html"  >Home</a> ';
          
        }
    }
}




?>
</body>
</html>