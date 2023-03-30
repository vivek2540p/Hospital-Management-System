<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
      body{
        margin: 20px;
        padding: 20px;
      }
      .hi{
        margin: 20px;
        padding: 20px;
      }
      .navbar{
            --bs-navbar-brand-color: rgb(255 255 255 / 90%);
          }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="ud.php">Doctor</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="./index.html">Home</a>
              <a class="nav-link" href="./dapp_his.php">Appointment</a>
              
            </div>
          </div>
        </div>
      </nav>

      <div class="hi">
      <table class="table table-bordered border-dark">
        <thead>
          <tr>
            <th scope="col">no.</th>
            <th scope="col">Patient Name</th>
            <th scope="col">Ill ness</th>
            <th scope="col">Date</th>
            <th scope="col">Contect number</th>
            
          </tr>
        </thead>
        <?php
      if(!session_id()) {session_start();}
    $server ="localhost";
    $user="root";
    $password="";
    $database="hos_user";
    $r=$_SESSION['uid'];
    
    $conn =mysqli_connect($server,$user,$password,$database);
    if(!$conn)
    {
        die("did not connect" . mysql_connect_error());
    }
    else{
       
     
        $sql="SELECT * FROM `doctor` WHERE `id` = $r";
        $result=mysqli_query($conn,$sql);
        $data = mysqli_fetch_assoc($result);
        $d=$data['name'];
        $sql="SELECT * FROM `appoinment` WHERE `doctor name` LIKE '$d' ";
        $result1=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($result1);
        
   

     if($num==0){
      echo '
            <th scope="col"></th>
            <th scope="col">no data found</th>
            <th scope="col">no data found</th>
            <th scope="col">no data found</th>
            <th scope="col">no data found</th>
          '; 
     }else{
      for ($i=0; $i < $num; $i++) { 

        
        $ddata= mysqli_fetch_assoc($result1);
      
       echo "
          <tr>
            <th>" . $i+1 . "</th>
            <td>" . $ddata['name'] . "</td>
            <td>" . $ddata['ill ness'] . "</td>
            <td>" . $ddata['date'] . "</td>
            <td>" . $ddata['mobile number'] . "</td>
            </tr>";
           
      }
        
    }
}
      ?>
      </table>
      </div>
      

     


</body>
</html>