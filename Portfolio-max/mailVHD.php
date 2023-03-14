<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

//ini_set("SMTP","localhost");
//ini_set("smtp_port","25");

echo "<br><br>==================================================================================================<br><br><br>";
echo "ENVOI avec php mail()";
echo "<br><br>==================================================================================================<br><br><br>";

// Vérifier si le formulaire est soumis 
if ( isset( $_POST['submit'] ) ) {
    /*récupérer les données du formulaire en utilisant 
    la valeur des attributs name comme clé */
    
    $exp = $_POST['email']; 
    $sujet = $_POST['sujet']; 
    $mess = $_POST['message'];
    // afficher le résultat
    echo '<h3>Informations récupérées en utilisant POST</h3>'; 
    echo "<br>";
    echo 'Expéditeur : '. $exp.'<br>'; 
    echo 'Sujet : ' . $sujet.'<br>';  
    echo ' Votre message: ' . $mess.'<br>'; 
	
   $entetes="From: sc@example.comn";
   $entetes.="Cc: chiny@example.comn";
   $entetes.="Content-Type: text/html; charset=iso-8859-1";
	
    //mail("maxime.huds@gmail.com", "test", "test");
	if(mail("maxime.huds@gmail.com",$sujet,$mess,$entetes))
      echo "Mail envoyé avec succès.";
	else
      echo "Un problème est survenu.";
    
  
  
    
}



echo "<br><br>==================================================================================================<br><br><br>";
echo "ENVOI avec phpmailer()";
echo "<br><br>==================================================================================================<br><br><br>";
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);



try {
    
    //Server settings
    $mail->SMTPDebug = 1;
    $mail->SMTPAuth = TRUE;
    //$mail->SMTPSecure = “tls”;
    //$mail->Port = 465;
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.free.fr';                     //Set the SMTP server to send through

    //$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'vseawar@free.fr';                     //SMTP username
    $mail->Password   = 'vs0122';                               //SMTP password
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    

    //Recipients
    $mail->setFrom('vseawar@free.fr', 'Mailer');
    $mail->addAddress('vseawar@gmail.com', 'vincent');     //Add a recipient

    //Attachments
    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    echo "52<br>";
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

echo '<br><br><br><a href="https://mysynohudsnas.synology.me/Portfolio-max/">retour</a>';

?>