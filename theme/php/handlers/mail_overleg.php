<?php 

require '../com/PHPMailer/PHPMailerAutoload.php';
require 'jsonHandler.php';

$jh = new JsonHandler();
$mail = new PHPMailer();
$confirm_mail = new PHPMailer();

$tel = $jh->get('tel'); 
$naam = $jh->get('naam'); 
$email = $jh->get('email'); 
$bezorgen = $jh->get('bezorgen'); 
$datum = $jh->get('datum'); 
$tijd = $jh->get('tijd'); 
$postcode = $jh->get('postcode'); 
$huisnummer = $jh->get('huisnummer'); 
$plaats = $jh->get('plaats'); 
$foto = $jh->get('attachment');
$smaak = $jh->get('smaak');
$personen = $jh->get('personen');
$taartset = $jh->get('taartset');
$customTaart = $jh->get('custom');
$tekst = $jh->get('text');
$texttype = $jh->get('texttype');
$prijs = $jh->get('prijs');
$foto = $jh->get('foto');

$vinnyMail = 'joranveenstra@gmail.com';
$from = 'service@mediakweker.nl';


$orderId = time().'_'.trim(str_replace(' ','_',$naam));

$mail_order_templ = file_get_contents('mail_temp/confirm_overleg.html');

//ORDER MAIL

$mail->setFrom($email, $naam); // from
$mail->addAddress($vinnyMail);     // Add a recipient

if($foto != '')
{
	$mail->addAttachment('../../server/php/files/'.$foto, $orderId.'.jpg');    // Optional name
}
	
$mail_order_templ = str_replace(
	array(
		"{{id}}",
		"{{tel}}",
		"{{naam}}",
		"{{email}}",
		"{{bezorgen}}",
		"{{datum}}",
		"{{tijd}}",
		"{{postcode}}",
		"{{huisnummer}}",
		"{{plaats}}", 
		"{{foto}}",
		"{{smaak}}",
		"{{personen}}",
		"{{taart}}",
		"{{tekst}}",
		"{{texttype}}",
		"{{prijs}}",
		"{{custom}}",
		"{{taartset}}"
	),
	array(
		$orderId,
		$tel,
		$naam,
		$email,
		$bezorgen,
		$datum,
		$tijd,
		$postcode,
		$huisnummer,
		$plaats, 
		$foto,
		$smaak,
		$personen,
		$taart,
		$tekst,
		$texttype,
		$prijs,
		$customTaart,
		$taartset
	),
	$mail_order_templ
);

$mail->isHTML(true);  
$mail->Subject = 'Taart op maat aangevraagde bestelling'; // subject
$mail->msgHTML($mail_order_templ, dirname(__FILE__)); 



if(!$mail->send()) {
    $jh->iState = 0;
} else {
	
    $jh->iState = 1;
}

$jh->render();
