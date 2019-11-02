<!DOCTYPE html>
<html>
<head>
<title>Send Encoded Message</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
</html>

<?php   

    $apiKey = "VUC0Y7XTWZ9C6PUYCW1EMOKFM5Y9WDK4";
    $secretKey = "SY3KLKA1RCJGQ4TF";

    $mobileNo = $_POST['phn'];
    $text = 'Secret Key: '.$_POST['secret_key'].' | Sent from Safe Message Transfer';

    $url="https://www.way2sms.com/api/v1/sendCampaign";
    $message = urlencode($text);// urlencode your message
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
    curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey=$apiKey&secret=$secretKey&usetype=stage&phone=$mobileNo&senderid=tenrin74@gmail.com&message=$message");// post data
    // query parameter values must be given without squarebrackets.
     // Optional Authentication:
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    curl_close($curl);
    echo '<p id="result">'.$result.'</p>';

    echo '<script type="text/javascript"> 	
swal({
    title: "Great!",
    text: "Your Secret Key has been Sent to +91-'.$mobileNo.'",
    icon: "success"
}).then(function() {
    window.location = "sendCipher.php";
});
  </script>';


?>