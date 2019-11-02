<!DOCTYPE html>
<html lang="en">
<head>
  <title>Safe Message Transfer - Send Message</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:900|Roboto:400,400i,500,700" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>
<nav class="navbar navbar-expand bg-info navbar-dark sticky-top">
   <a class="navbar-brand" href="home.php"><img src="smt_logo1.png" width="200px" height="45px" class="d-inline-block align-top" alt=""></a>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item ">
          <a class="nav-link " href="home.php"><i class="fas fa-home"></i> Home</a>
        </li> 
         <li class="nav-item ">
          <a class="nav-link " href="about.php"><i class="fas fa-question-circle"></i> About</a>
        </li> 
      </ul>      
</nav>
<div class="jumbotron text-center">
  <h1 >Step 2. Send the Message</h1>
  <p>Send The Encrypted Message To Your Friends</p> 
</div>
<br>

<div class="container ">
  <br>
  <!-- Nav tabs -->
  <div class="card">
    <ul class="nav nav-tabs justify-content-center">
        <li class="nav-item"> 
          <a class="nav-link active" data-toggle="tab" href="#phone">Share the Secret Key through SMS&nbsp; <i class="fas fa-mobile"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#mail">Share Encrypted Message through Email&nbsp; <i class="fas fa-envelope-open-text"></i></a>
        </li>
      </ul>
      
      <!-- Tab panes -->
      <div class="tab-content">
        <div id="phone" class="container tab-pane active"><br>
            <form method="POST" action="sendSMS.php">
                              <div class="form-group">
                                  <label class="control-label" for="phone">Mobile No: <span class="text-danger">*</span> </label>
                                  <input type="number" class="form-control" id="phone" placeholder="Enter Mobile No. of the Recepient" name="phn">
                              </div>
                              <div class="form-group">
                                  <label class="control-label" for="key">Secret-Key <span class="text-danger">*</span> </label>
                                  <input type="text" class="form-control" id="key" placeholder="Enter the Secret Key" name="secret_key">                                  
                              </div>
                              <div class="form-group float-right">
                                  <button class="btn btn-primary" type="submit" name="submit1" >Send Secret Key</button>                                 
                              </div>             
            </form>
        </div>
        <div id="mail" class="container tab-pane fade"><br>
          <form method="POST" action="sendMail.php">
                              <div class="form-group">
                                  <label class="control-label" for="emailID">Email-ID <span class="text-danger">*</span> </label>
                                  <input type="email" class="form-control" name="email_ID" id="emailID" placeholder="Enter a valid Email-ID"  required name="email">
                              </div>
                              <div class="form-group">
                                  <label class="control-label" for="ciphertxt">Encrypted Message <span class="text-danger">*</span> </label>
                                  <input type="text" class="form-control" id="ciphertxt" placeholder="Enter Encrypted Message" name="cipher">                                  
                              </div>
                              <div class="form-group float-right">
                                  <button type="submit" class="btn btn-primary" name="submit2">Send Encrypted Message</button>
                              </div>   
        </form>
        </div>  
      </div>                
    </div>
</div>


</body>
</html>
