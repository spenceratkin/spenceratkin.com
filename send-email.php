<?php
//header('Location: com.atkin-labs.TJIon://redirect?' . $_SERVER['QUERY_STRING']);exit();

$email = $_GET['email'];
$name = $_GET['name'];
$venmo = $_GET['venmo'];
$textbooks = $_GET['textbooks'];
$prices = $_GET['prices'];

$email_str = "Name: " . $name . "\nEmail: " . $email . "\nVenmo: " . $venmo . "\nTextbooks:\n";
for ($x = 0; $x < count($textbooks); $x++) {
	$email_str = $email_str . $textbooks[$x] . " : " . $prices[$x] . "\n";
}
echo $email_str;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';//'/usr/share/php/PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';//'/usr/share/php/PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';//'/usr/share/php/PHPMailer/src/SMTP.php';

$mail = new PHPMailer();

// Settings
$mail->IsSMTP();
$mail->CharSet = 'UTF-8';

$mail->Host       = "mail.tigerinnovations.com"; // SMTP server example
$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Port       = 25;                    // set the SMTP port for the GMAIL server
$mail->Username   = "spencer@spenceratkin.com"; // SMTP account username example
$mail->Password   = "Dweekij.1";        // SMTP account password example
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

$mail->setFrom('spencer@spenceratkin.com');
$mail->addAddress('spencer@spenceratkin.com');     // Add a recipient

// Content
$mail->isHTML(false);                                  // Set email format to HTML
$mail->Subject = 'PHP Mail Test';
$mail->Body    = $email_str;

$mail->send();

echo 'success';
/*
require_once "Mail.php";
 
$from = "Tester <spencer@spenceratkin.com>";
$to = "Recipient <spenceratkin@spenceratkin.com>";
$subject = "Hi!";
$body = "Hi,\n\nHow are you?";
 
$host = "ssl://mail.tigerinnovations.com";
$port = "25";
$username = "spencer@spenceratkin.com";
$password = "Dweekij.1";
 
$headers = array ('From' => $from,
   'To' => $to,
   'Subject' => $subject);
$smtp = Mail::factory('smtp',
   array ('host' => $host,
     'port' => $port,
     'auth' => true,
     'username' => $username,
     'password' => $password));
 
$mail = $smtp->send($to, $headers, $body);
 
if (PEAR::isError($mail)) {
	echo("<p>" . $mail->getMessage() . "</p>");
} else {
	echo("<p>Message successfully sent!</p>");
}
*/
?>
