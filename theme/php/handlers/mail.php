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


$orderId = time().'_'.trim(str_replace(' ','_',$naam));

$mail_order_templ = file_get_contents('mail_temp/order.html');

//ORDER MAIL

$mail->setFrom($email, $name); // from
$mail->addAddress('joranveenstra@gmail.com');     // Add a recipient

if($foto != '')
{
	$mail->addAttachment($foto, $orderId.'.jpg');    // Optional name
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
$mail->Subject = 'Taart op maat bestelling'; // subject
$mail->msgHTML($mail_order_templ, dirname(__FILE__)); 

//CONFIRM MAIL
$mail_confirm_templ = file_get_contents('mail_temp/confirm.html');

$confirm_mail->setFrom('service@mediakweker.nl', 'Vinny\'s Bakery'); // from
$confirm_mail->addAddress($email);     // Add a recipient
//$confirm_mail->addCC('service@mediakweker.nl');

if($foto != '')
{
	$confirm_mail->addAttachment($foto, $orderId.'.jpg');    // Optional name
}
	
$mail_confirm_templ = str_replace(
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
	$mail_confirm_templ
);

$confirm_mail->isHTML(true);  
$confirm_mail->Subject = 'Uw bestelling'; // subject
$confirm_mail->msgHTML($mail_confirm_templ, dirname(__FILE__)); 


if(!$mail->send()) {
    $jh->iState = 0;
} else {
	if(!$confirm_mail->send()) {
		$jh->iState = 0;
	}
	else
	{
		$jh->iState = 1;
	}
    
}

$jh->render();
