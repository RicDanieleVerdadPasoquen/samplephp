<?php

  //initialize session
  session_start();

  if( !isset($_SESSION['email']) || empty($_SESSION['email'])){
    header('location: login.php');
    exit;
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <title>Dashboard</title>
</head>
<body style="background-image: url('assets/images/blue_sky.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card card-body bg-light mt-5">
          <h2>Ric Daniele V. Pasoquen</h2>
          <p><strong>Welcome to My Web Application!</strong></p>
		
		<div class="col-sm-12" style="padding-right: 5px; padding-left: 5px;">
          <div class="rounded" style="background-color: black; margin-bottom: 5px; padding: 2px; padding-left: 10px;">
            <h5 class="text-center" style="color: white;">Dashboard</h5>
            </div>
          <div class="card-group">
            <div class="card border border-light">
              <img class="rounded card-img-top border border-dark" src="image/bday.jpg" alt="Card image cap">
                <div class="card-body" style="padding: 5px;">
                    <h5 class="card-title" style="margin-bottom: 1px;"><a class="text-dark" href="indexfbd.php">Famous Birthdays</a></h5>
                    <small>The website is list of famous birthdays. </small>
		</div>
    </div>
    
		<div class="col-sm-12 border border-bottom-dark mt-3">
			
		</div>
		</div>
		<h5 class="col-sm-1"><a href="logout.php" class="mt-3 btn btn-danger">Logout</a></h5>
		</div>  
      </div>
    </div>
  </div>
  
</body>
</html>