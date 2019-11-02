<!DOCTYPE html>
<html>
<head>
<title>Send Secret KEY</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
</html>

<?php 

$email_ID = $_POST['email_ID'];
$secretKey = 'Secret Encrypted Message: '.$_POST['cipher'].'<br>Sent from <b>Safe Message Transfer</b>';

require_once('PHPMailer/PHPMailerAutoload.php');

$mail = new PHPMailer();
$mail -> isSMTP();
$mail -> SMTPAuth = true;
$mail -> SMTPSecure = 'ssl';
$mail -> Host = 'smtp.gmail.com';
$mail -> Port = '465';
$mail -> isHTML();
$mail -> Username = 'secure.message.trasfer@gmail.com';
$mail -> Password = 'AlwaysFollowYourHeart@SMT';

$mail -> SetFrom($email_ID);			
$mail -> Subject = "Encrypted Message from Safe Message Transfer";
$mail -> Body = $secretKey;
$mail -> AddAddress($email_ID);			//email address where the key will be sent

$mail -> Send();

echo '<script type="text/javascript"> 	
swal({
    title: "Great!",
    text: "Your Encrypted Message has been Sent to '.$email_ID.' ",
    icon: "success"
}).then(function() {
    window.location = "sendCipher.php";
});
  </script>';

?>