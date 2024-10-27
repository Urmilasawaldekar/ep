<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Footer Design</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&family=PT+Sans+Narrow&family=Roboto:wght@300&display=swap');

.container{
    max-width: 1170px;
    margin: auto;
  
}
.row{
    display: flex;
    flex-wrap: wrap;
}
ul{
    list-style: none;
}

.footer{
    background-color: #1d4052;
    padding: 40px 0;
    margin-top:52%;
 
}
.footer-col{
    width: 25%;
    padding: 0 15px;
}
.footer-col3{
    width: 25%;
    padding: 0 15px;
}
.footer-col h4{
    font-size: 18px;
    color: #ffffff;
    text-transform: capitalize;
    margin-bottom: 35px;
    font-weight: 500;
    position: relative;
}
.footer-col3 h4{
    font-size: 18px;
    color: #ffffff;
    text-transform: capitalize;
    margin-bottom: 35px;
    font-weight: 500;
    position: relative;
}
.footer-col h4::before{
    content: '';
    position: absolute;
    left:0;
    bottom: -10px;
    background-color: #e91e63;
    height: 2px;
    box-sizing: border-box;
    width: 50px;
}
.footer-col3 h4::before{
    content: '';
    position: absolute;
    left:0;
    bottom: -10px;
    background-color: #e91e63;
    height: 2px;
    box-sizing: border-box;
    width: 50px;
}
.footer-col2{
    width: 30%;
    padding: 0 15px;
    margin-left:15%;
}
.footer-col2 h4{
    font-size: 18px;
    color: #ffffff;
    text-transform: capitalize;
    margin-bottom: 35px;
    font-weight: 500;
    position: relative;
}
.footer-col2 h4::before{
    content: '';
    position: absolute;
    left:0;
    bottom: -10px;
    background-color: #e91e63;
    height: 2px;
    box-sizing: border-box;
    width: 50px;
}
.footer-col ul li:not(:last-child){
    margin-bottom: 10px;
  
    
}
.footer-col3 ul li:not(:last-child){
    margin-bottom: 10px;
  
    
}
.footer-col ul li a{
    font-size: 16px;
    text-transform: capitalize;
    color: #ffffff;
    text-decoration: none;
    font-weight: 300;
    color: #bbbbbb;
    display: block;
    transition: all0.3s ease;
}
.footer-col3 ul li a{
    font-size: 16px;
    text-transform: capitalize;
    color: #ffffff;
    text-decoration: none;
    font-weight: 300;
    color: #bbbbbb;
    display: block;
    transition: all0.3s ease;
}
.footer-col ul li a:hover{
    color:#ffffff;
    padding-left: 8px;
}
.footer-col3 ul li a:hover{
    color:#ffffff;
    padding-left: 8px;
}
.footer-col .social-links a{
    display: inline-block;
    height: 40px;
    width: 40px;
    background-color: rgba(255,255,255,0.2);
    margin:0 10px 10px 0;
    text-align: center;
    line-height: 40px;
    border-radius: 50%;
    color:#ffffff;
    transition: all 0.5s ease;

}
.footer-col .social-links a:hover{
color: #24262b;
background-color: #ffffff;
}
/* responsive */
@media(max-width: 767px){
.footer-col {
    width: 50%;
    margin-bottom: 30px;
}
.footer-col {
    width: 100%;
    margin-bottom: 30px;
}
}
@media(max-width: 574px){
    .footer-col {
        width: 100%;
    }
}

.contact-info {
        color: #fff;
        max-width: 500px;
        line-height: 65px;
        padding-left: 50px;
        font-size: 18px
    }

    .contact-info i {
        margin-right: 20px;
        font-size: 30px;
    }

    .contact-form {
        max-width:100%;
        margin-right: 50px;
    }

    .contact-info,
    .contact-form {
        flex: 1;

    }

    .contact-form h2 {
        color: #fff;
        text-align: center;
        font-size: 30px;
        text-transform: uppercase;
        margin-bottom: 30px;
    }

    .contact-form .text-box {
        background: #fff;
        color: black;
        border: none;
        width: calc(50% - 10px);
        height: 50px;
        padding: 12px;
        font-size: 15px;
        border-radius: 5px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        opacity: 0.9;
    }

    .contact-form .text-box:first-child {
        margin-right: 15px;
    }
    .contact-form textarea{
        background: white;
        color:black;
        border: none;
        width: 100%;
        padding: 12px;
        font-size: 15px;
        min-height: 100px;
        max-height: 200px;
        resize: vertical;
        border-radius: 5px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        opacity: 0.9;
    }
    .contact-form .send-btn{
        float: right;
        background-color: dodgerblue;
         color: #fff;
         border: none;
         width: 120px;
         height: 40px;
         font-size: 15px;
         font-weight: 600;
         text-transform: uppercase;
         letter-spacing: 2px;
         border-radius: 5px;
         cursor: pointer;
         transition: 0.3s;
         
    }

    .contact-form .send-btn:hover{
        background: royalblue;
    }

    @media screen and (max-width:850px){
.contact-section{
    flex-direction: column;
}

.contact-info, .contact-form{
    margin: 30px 50px;
}
.contact-form h2{
    font-size: 30px;
}
.contact-form .text-box{
    width: 100%;
}
    }
    .footer-col3{
    width:200px;
    /* padding: 0 15px; */
    }

.footer_section {
  position: relative;
  background-color: #030d47;
  text-align: center;
}

.footer_section p {
  color: #ffffff;
  padding: 25px 0;
  margin: 0;
}

.footer_section p a {
  color: inherit;
}
</style>

<body>
    <footer class="footer" id="contactus">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Home Tab</h4>
                    <ul>
                        <li><a href="home.php"  >Home</a></li><br/>
                        <li ><a href="Property.php">Properties</a></li><br/>
                        <li ><a href="Property.php"> Add Property</a></li><br/>
                        <li><a href="aboutus.php">About us</a></li>
                        
                    </ul>

                </div>
                <div class="footer-col3">
                    <h4>social media</h4>
                    <ul>
                       
                    <div class="social_container">
    
           <li>     <a href="">
           <i class="fa-brands fa-facebook"></i>  Facebook</a></li>

              <li> <a href="">
              <i class="fa-brands fa-twitter"></i>
                Twitter</a></li>
              <li>    <a href=""><i class="fa-brands fa-linkedin"></i>
                linkedin</a></li>
              <li>  <a href="">
              <i class="fa-brands fa-instagram"></i>
                instagram</a></li>
                    </ul>
</div>
                <div class="footer-col2">
                <h4>Contact Us</h4>
            
                <form class="contact" action="" method="post">
                <div class="contact-form">
           
            <form class="contact" action="" method="post">
                <input type="text" name="name" class="text-box" placeholder="your name" required>
                <input type="email" name="email" class="text-box" placeholder="your email" required>
                <textarea name="message" rows="5" placeholder="your message" required></textarea>
                <input type="submit" name="submit" class="send-btn" value="send">
            </form>
        </div>
                </div>
                

                </div>

            </div>
            <footer class="footer_section" style="background-color: #1d4052;">

<p>
  &copy; <span id="displayYear"></span> All Rights Reserved By StayEase
</p>
        </div>

    </footer>

</body>

</html>
<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;
  
  //Load Covendorer
  require 'vendor/autoload.php';
  if(isset($_POST['submit'])){
    $name = $_POST['name'];
   $contact = $_POST['phone'];
 
    $from = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
   
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'tejumahajan1303@gmail.com';                     //SMTP username
    $mail->Password   = 'necxyozgscxllecq';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($from,$name);
    $mail->addAddress( 'tejumahajan1303@gmail.com');     //Add a recipient
  // $mail->addAddress($from);               //Name is optional
    $mail->addReplyTo($from, 'EntryPoint');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    =  "<table><tr><td>Name:</td><td>$name</td></tr><tr><td>Message:</td><tr><td>$message</td></tr><tr><td>From:</td><td>$from</td></tr></table>";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo "<script>
alert('mail sent');
window.location.href='home.php';
</script>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

    
  }
  
  ?>