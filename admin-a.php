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
        .hi{
            margin: 20px;
        padding: 20px;
        }
        .navbar{
            --bs-navbar-brand-color: rgb(255 255 255 / 90%);
          }
        .table{
            margin: auto;
        padding: 50px;
        }
    </style>
</head>
<body>
    <div class="hi">
<nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="./admin.html">Admin</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="./index.html">Home</a>
              <a class="nav-link" href="./admin_d.php">Doctor</a>
              <a class="nav-link" href="./admin_p.php">Patient</a>
              <a class="nav-link" href="./admin-a.php">Appointment</a>
              <a class="nav-link" href="./admin_q.php">Quary</a>
            </div>
          </div>
        </div>
      </nav>

<div class="table">
<table class="table table-bordered border-dark">
        <thead>
          <tr>
            <th scope="col">no.</th>
            <th scope="col">Patient name</th>
            <th scope="col">Doctor name</th>
            <th scope="col">p_mobile no.</th>
            <th scope="col">p_email</th>
            <th scope="col">ill ness</th>
            <th scope="col">date</th>
          </tr>
        </thead>
        <?php
   
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
     
     $sql="SELECT * FROM `appoinment`";
     $result=mysqli_query($conn,$sql);
     $num=mysqli_num_rows($result);
      for ($i=0; $i < $num; $i++) { 

        $data = mysqli_fetch_assoc($result);
      
       echo "
          <tr>
            <th>" . $data['id']  . "</th>
            <td>" . $data['name'] . "</td>
            <td>" . $data['doctor name'] . "</td>
            <td>" . $data['mobile number'] . "</td>
            <td>" . $data['email'] . "</td>
            <td>" . $data['ill ness'] . "</td>
            <td>" . $data['date'] . "</td>
          </tr> 
          "; 
      }
        
    }

      ?>
      </table>
      </div>
      </div>
      </div>
</body>
</html>