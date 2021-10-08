<?php
include_once "partials/db_con.php";
use PHPMailer\PHPMailer\PHPMailer;
$msg="";
if(isset($_POST['send_message'])){
    // echo "Sended";
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject="Customer Support Service ".$_POST['subject'];
	$message=$_POST['message'];

	 $res=mysqli_query($con,"INSERT INTO `contact_us`(`co_name`, `co_email`, `co_subject`, `co_message`) VALUES ('$name','$email','$subject','$message')");
     if($res){
   
        
         echo "Added";
     }else{  echo "Not added";}
// 	$msg="Thanks message";
	
	$html="<table><tr><td><b>From:</b></td><td>$email</td></tr><tr><td><b>Name:</b></td><td>$name</td></tr><tr><td><b>Subject:</b></td><td>".substr($subject,25,strlen($subject))."..</td></tr><tr><td><b>Message:</b></td><td>$message..</td></tr></table>";
	
    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";
$from=$email;
$to="Developer9999999999@gmail.com";
    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->SMTPSecure = "tls";
    $mail->SMTPAuth = true;
    $mail->Username = "Developer9999999999@gmail.com";
    $mail->Password = 'talhataimoor99999';

    $mail->SetFrom($email);
    $mail->addAddress("Developer9999999999@gmail.com");
    $mail->IsHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $html;
    $mail->SMTPOptions = array('ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => false
    ));
	if($mail->send()){
		echo "Mail send";
		header('location:contact-1.php#main_contact');
	}else{
		echo "Error occur";
	}
	// echo $msg;
}}
?>