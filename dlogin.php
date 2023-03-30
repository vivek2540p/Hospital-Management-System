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

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $UID = $_REQUEST['username'];
    $pass = $_REQUEST['pass'];
    $server ="localhost";
    $user="root";
    $password="";
    $database="hos_user";
    

    $conn =mysqli_connect($server,$user,$password,$database);
    if(!$conn)
    {
        die("did not connect" . mysql_connect_error());
    }
    else{
        $sql="SELECT * FROM `doctor`";
        $result=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($result);
      
        while($data = mysqli_fetch_assoc($result)){
          static $count=0;
         
            if($UID==$data['id'] && $pass==$data['pass']){

           
              $sql="SELECT * FROM `doctor` WHERE `id` = $UID";
              $result=mysqli_query($conn,$sql);
              $ro=mysqli_fetch_assoc($result);
              include('./dd.php'); 
              break;
            }
            
            $count++;
            if($count==$num)
            {
                
                echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Fail</strong> Please check your id and password again.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
                
            }
        }
    }

}


?>







</body>
</html>