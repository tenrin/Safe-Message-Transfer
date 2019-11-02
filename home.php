<!DOCTYPE html>
<html lang="en">
<head>

  <style type="text/css">
     
  </style>
  <title>Secure Message Transfer - Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!------------------------------------ links -------------------------------------------->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:900|Roboto:400,400i,500,700" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<!------------------------------------ links -------------------------------------------->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>  
</head>

<body>

<nav class="navbar navbar-expand bg-info navbar-dark sticky-top">
   <a class="navbar-brand" href="#"><img src="smt_logo1.png" width="200px" height="45px" class="d-inline-block align-top" alt=""></a>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item ">
          <a class="nav-link " href="#"><i class="fas fa-home"></i> Home</a>
        </li> 
         <li class="nav-item ">
          <a class="nav-link " href="about.php"><i class="fas fa-question-circle"></i> About</a>
        </li> 
      </ul>      
</nav>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Safe Message Transfer</h1>
  <p>Transfer Any Secret Message Safely To Anybody </p> 
</div>
  <br>

  <div class="container">
    <div class="row">
      <div class="col-lg-8">
          <p> Safe Message Transfer (S.M.T.) is a website that allows you to send secret messages to anybody on their Mobile phone. SMT encrypt your secret message with an Encryption Algorithm by giving two important parameters, namely - <b> The Secret KEY </b> and <b> The Secret Message.</b> </p>
          <p> For S.M.T. to work, you will need two important values i.e., an email address for sending the secret key and a mobile number for sending the encrypted message. </p>   <br>
          <a href="encrypt.php"> <button class="btn btn-danger"> Start Encrypting</button> </a> &nbsp; 
          <a href="decrypt.php"> <button class="btn btn-success"> Decrypt a secret Message</button> </a>
      </div>
      <div class="col-lg-4">
        <img src="encryption_email.png" height="260" width="300" >
      </div>    
    </div>
  </div>


</body>
</html>
