# Safe Message Transfer
Safe Message Transfer is a webpage developed in PHP language that allows users to send secret messages to receiver by __Encrypting__ the message using a *Secret Key*. <br>
This Encrypted Cipher text is sent to the receiver's **Email Address** and the Secret Key is shared to the receiver's **Mobile Number** through SMS. <br>
I have used **way2SMS API** for sending the SMS and **PHPMailer** for sending EMAIL.

The encryption is an *AES Encryption* that is performed using **CryptoJS** library : **crypto-js/3.1.2**

Find the screenshots containing detailed procedure below:
* Home Page <br>
![Safe-Message-Transfer](/screenshots/1-home.png)
* Encryption Page <br>
![Safe-Message-Transfer](/screenshots/2-encryption_page.png)
* Send the Secret Key <br>
![Safe-Message-Transfer](/screenshots/3-send_key.png)
![Safe-Message-Transfer](/screenshots/4-sms_sent.png)
* Send the Encrypted Cipher Text
![Safe-Message-Transfer](/screenshots/5-send_ciphertext.png)
![Safe-Message-Transfer](/screenshots/6-email_sent.png)
<br>
* The receiver will receive the ciphertext on their EMAIL Address as:
![Safe-Message-Transfer](/screenshots/7-sms_received.jpg)
![Safe-Message-Transfer](/screenshots/8-email_received.png)
