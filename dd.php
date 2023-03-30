<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
      crossorigin="anonymous"
    ></script>
    <title>Document</title>
    <link rel="stylesheet" href="./ud.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Doctor</a>
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

      <?php
if(!session_id()) {session_start();}
$_SESSION['uid']= $ro['id'];
?>


    
<div class="ff">

      <form class="row g-3">
      <div class="col-md-6">
            <label for="inputname" class="form-label">ID</label>
            <input type="text" class="form-control" id="inputname" value="<?php echo $ro['id']; ?>">
          </div>
        <div class="col-md-6">
            <label for="inputname" class="form-label">Name</label>
            <input type="text" class="form-control" id="inputname" value="<?php echo $ro['name']; ?>">
          </div>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="email" class="form-control" id="inputEmail4" value="<?php echo $ro['email']; ?>">
        </div>
       
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Password</label>
          <input type="text" class="form-control" id="inputPassword4" value="<?php echo $ro['pass']; ?>">
        </div>
        <div class="col-12">
          <label for="inputnumber" class="form-label">Contect</label>
          <input type="number" class="form-control" id="inputnumber" placeholder="1234 Main St" value="<?php echo $ro['contact']; ?>">
        </div>
        
        <div class="col-md-2">
          <label for="inputblood_g" class="form-label">SP_for</label>
          <input type="text" class="form-control" id="inputblood_g" value="<?php echo $ro['sp_for']; ?>">
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>


  </body>
</html>
