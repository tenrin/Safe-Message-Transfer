# Safe Message Transfer
Safe Message Transfer is a webpage developed in PHP language that allows users to send secret messages to receiver by __Encrypting__ the message using a *Secret Key*. <br>
This Encrypted Cipher text is sent to the receiver's **Email Address** and the Secret Key is shared to the receiver's **Mobile Number** through SMS. <br>
I have used **way2SMS API** for sending the SMS and **PHPMailer** for sending EMAIL.

The encryption is an *AES Encryption* that is performed using **CryptoJS** library : **/crypto-js/3.1.2**
