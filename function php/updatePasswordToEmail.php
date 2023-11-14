<?php 
session_start();
include 'conn.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* Exception class. */
require '..\PHPMailer\src\Exception.php';

/* The main PHPMailer class. */
require '..\PHPMailer\src\PHPMailer.php';

/* SMTP class, needed if you want to use SMTP. */
require '..\PHPMailer\src\SMTP.php';




function generateRandomString() {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < 8; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}





$passwordUsername = $_GET['passwordUsername'];
$passwordEmail = $_GET['passwordEmail'];


$sqlSelect = ' SELECT `username` FROM `tbl_user` WHERE `username` = "'.$passwordUsername.'"';
$execSelect = $conn->query($sqlSelect);

$newPassword = generateRandomString();
$hashPassword = password_hash($newPassword, PASSWORD_DEFAULT);

if ($execSelect->num_rows > 0) 
{

	$sql = ' UPDATE `tbl_user` SET  `password`= "'.$hashPassword.'"  WHERE `username` = "'.$passwordUsername.'" AND `email` = "'.$passwordEmail.'" ';
	$exec = $conn->query($sql);


	// $mail = new PHPMailer(true);
	$mail = new PHPMailer();
  
	$mail->isSMTP();
	//Define smtp host
	$mail->Host = "smtp.gmail.com";
	//Enable smtp authentication
	$mail->SMTPAuth = true;
	//Set smtp encryption type (ssl/tls)
	$mail->SMTPSecure = "tls";
	//Port to connect smtp
	$mail->Port = "587";
	//Set gmail username
	$mail->Username = "lgrrc4a@gmail.com";
	//Set gmail password
	$mail->Password = "lgrc2021";
	//Email subject
	$mail->Subject = "Update Password";
	//Set sender email
	$mail->setFrom('lgrrc4a@gmail.com');
	//Enable HTML
	$mail->isHTML(true);
	//Attachment
	// $mail->addAttachment('img/attachment.png');
	//Email body
	$mail->Body = "<h2>Your new password is ".$newPassword."</h2></br><p>Please do not share this to anyone.</p>";
	//Add recipient
	$mail->addAddress($passwordEmail);
	//Finally send email
	if ( $mail->send() ) 
	{
	    // echo "Email Sent..!";
	    echo "success";
	}
	else
	{
	    echo "Message could not be sent. Mailer Error: "{$mail->ErrorInfo};
	    echo "errorSending";
	}
	//Closing smtp connection
	$mail->smtpClose();

	
}
else
{
	echo "error";
}




 ?>