<?php
session_start() ; 

$row = $_SESSION['user']  ; 
echo $row['user'] ; 
// ajouter une actualité 

require("include/config.php");

if(empty($_POST))  die("pas de News"); 

$titre = $_POST['title'];
$auteur = $_POST['auteur'];
$contenu = $_POST['message'];


$query = "INSERT INTO news(titre , auteur, contenu , date) VALUES(:title , :auteur , :msg , NOW())"; 
$query_param = array(
	':title' => $titre,
	':auteur' => $auteur,
	':msg' => $contenu ) ; 

try {

$statm = $db->prepare($query) ; 
$result = $statm->execute($query_param) ; 

	}catch(PDOException $ex){die ("Impossible d'executer la requete" . $ex->getMessage()) ;}





// envoyer une NEWSLETTER a tous les abonneés 

error_reporting(E_STRICT | E_ALL);

date_default_timezone_set('Etc/UTC');

require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer;

$body ="<body> <h1> Cher/Chere  abonné(e) </h1> 
		<p> Notre derniere actualité est " .$titre . "</p>
		<p>" . $contenu . '</p>
		 <p>  Merci pour votre confiance et a bientot sur 
		 <a href = "https://www.google.com">Handirecrute.com </a></p>
		 </body>'  ; 

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->SMTPKeepAlive = true; // SMTP connection will not close after each email sent, reduces SMTP overhead
$mail->SMTPSecure = 'tls';
$mail->Port = 587 ;
$mail->Username = 'contact.handirecrute@gmail.com';
$mail->Password = 'handi2016';
$mail->setFrom('contact.handirecrute@gmail.com', 'Handirecrute Association');
$mail->Subject = 'Bienvenue aux NewsLetters du Handirecrute ';
$mail->msgHTML($body);

$mysql = mysqli_connect('localhost', 'hand_user', 'hand2015#');
mysqli_select_db($mysql, 'hand_db');
$result = mysqli_query($mysql, 'SELECT email FROM membres ');

foreach ($result as $ro) { //This iterator syntax only works in PHP 5.4+
    $mail->addAddress($ro['email']);
     if(!$mail->send()) {
        echo "Mailer Error (" . str_replace("@", "&#64;", $ro["email"]) . ') ' . $mail->ErrorInfo . '<br />';
        break; //Abandon sending
    } else {
        echo "Message sent to :" . $ro['full_name'] . ' (' . str_replace("@", "&#64;", $row['email']) . ')<br />'; }

 $mail->clearAddresses(); }

// retour a la page des news 
header("Location:sub2.php");





?>