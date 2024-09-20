<?php
// Check for empty fields

if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
  
$name = strip_tags(htmlspecialchars($_POST['name']));


$email_address = strip_tags(htmlspecialchars($_POST['email']));


$message = strip_tags(htmlspecialchars($_POST['message']));
$to = "web@codificardev.com.ar"; //Para quien se le va enviar


require 'class.phpmailer.php';
try {
	$mail = new PHPMailer(true); //Nueva instancia, con las excepciones habilitadas
	$body             = $message;
	$body             = preg_replace('/\\\\/','', $body); //Escapar backslashes
	$mail->IsMail();                           // Usamos el metodo SMTP de la clase PHPMailer
	$mail->SMTPAuth   = false;                  // habilitado SMTP autentificación
	//$mail->Port       = 25;                    // puerto del server SMTP
	//$mail->Host       = "mail.legalcode.com.ar"; // SMTP server
	$mail->From       = $to; //Remitente de Correo
	$mail->FromName   = "".$name.""; //Nombre del remitentec 
	$mail->AddAddress($to);
    $mail->AddBCC($email_address,$name);
    $mail->AddReplyTo($email_address,$name);
	$mail->Subject  = "Email desde pagina LegalCode"; //Asunto del correo
	$mail->MsgHTML("Enviado por: ".$email_address."<br/>".$body);
	$mail->IsHTML(true); // Enviar como HTML
	$mail->Send();//Enviar
    //echo 'El Mensaje a sido enviado.';
    return true;
} catch (phpmailerException $e) {
	echo $e->errorMessage();//Mensaje de error si se produciera.
}       
?>