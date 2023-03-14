<?php



// Vérifier si le formulaire est soumis 
//if ( isset( $_POST['submit'] ) ) {
    /* récupérer les données du formulaire en utilisant 
    la valeur des attributs name comme clé 
    */
$exp = $_POST['email']; 
$sujet = $_POST['sujet']; 
$mess = $_POST['message'];
// afficher le résultat
echo "<h1> Votre mail à bien été envoyé (c'est faux)</h1>
<br>
<br>
<h3>Synthaxe du mail qui aurait du être envoyé</h3>
<br>
Expéditeur : ".$exp."
<br>
Sujet : ".$sujet."
<br><br><br>
Message :<br>
<br>".$mess;
echo '<br><br><br><a href="https://mysynohudsnas.synology.me/Portfolio-max/">Retour à l\'acceuil</a>';
exit;

//}






/* Permet d'envoyer un mail

     $to      = 'personne@example.com';
     $subject = 'le sujet';
     $message = 'Bonjour !';
     $headers = 'From: webmaster@example.com' . "\r\n" .
     'Reply-To: webmaster@example.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

     mail($to, $subject, $message, $headers);
*/

?>