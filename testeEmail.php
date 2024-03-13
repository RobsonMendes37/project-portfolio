<?php
$to		="robsonqueirozmendes@gmailcom";
$subject	="teste de envio de email";
$message = 'ola,voce é um programador?';
$headers ="From : robson23122002@gmail.com . "\r\n" .
	"Reply-To: robson23122002@gmail.com";
mail($to,$subject,$message,$headers);

print "enviado!!!!"
?>
