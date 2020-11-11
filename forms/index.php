<?php


require_once('../vendor/autoload.php');

if($_SERVER['SERVER_NAME'] == 'localhost'){
	$transport = (new Swift_SmtpTransport('smtp.mailtrap.io', 2525))
  	->setUsername('cdb649a78d501a')
  	->setPassword('53aafa488ef5ad');
} else{
	$transport = Swift_MailTransport::newInstance();
}
$mailer = (new Swift_Mailer($transport));

$message = (new Swift_Message('Ashari Gunawan Hasan'))
	->setFrom(['asharigunawanhasan@gmail.com' => 'Ashari'])
	->setTo(['demo@demo.fr'])
	->setBody('Selamat Berhasil Terkirim');

$result = $mailer->send($message);
var_dump($result);


?>




<!-- TES -->

<?php


require_once('../vendor/autoload.php');

if($_SERVER['SERVER_NAME'] == 'localhost'){
	$transport = (new Swift_SmtpTransport('smtp.mailtrap.io', 2525))
  	->setUsername('cdb649a78d501a')
  	->setPassword('53aafa488ef5ad');
} else{
	$transport = Swift_MailTransport::newInstance();
}
$mailer = (new Swift_Mailer($transport));

$message = (new Swift_Message('name'))
	->setFrom(['email' => 'name'])
	->setTo(['Ashari.fr'])
	->setBody('subject');

$result = $mailer->send($message);
var_dump($result);


?>

<!-- TUTUP TES -->


/*
require_once('../vendor/autoload.php');

if($_SERVER['SERVER_NAME'] == 'localhost'){
	$transport = (new Swift_SmtpTransport('smtp.mailtrap.io', 2525))
  	->setUsername('cdb649a78d501a')
  	->setPassword('53aafa488ef5ad');
} else{
	$transport = Swift_MailTransport::newInstance();
}
$mailer = (new Swift_Mailer($transport));

$message = (new Swift_Message('Ashari Gunawan Hasan'))
	->setFrom(['asharigunawanhasan@gmail.com' => 'Ashari'])
	->setTo(['demo@demo.fr'])
	->setBody('Selamat Berhasil Terkirim');

$result = $mailer->send($message);
var_dump($result);


?>
*/


// $mail = mail('asharigunawanhasan@gmail.com', 'Tes', 'Ashari', 'From: webmaster@example.com');

// if ($mail) {
// 	echo "Merci"; 
// } else {
// 	echo "Erreur";
// } 