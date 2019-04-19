<?php 
require 'components/Mail.php';

$mail = new SMTPmailer();
$mail->addTo('marianoradu@mail.com');
$mail->Subject("Benvenuto in Super ecommerce");
$mail->body("
        <link href='https://fonts.googleapis.com/css?family=Lobster|VT323' rel='stylesheet'>
    <center>
        <h1 style='font-family: Lobster, cursive;'>Super e-Commerce</h1>
 
        <h1> Benvenuto, [nome utente] </h1>
    </center
    <p> Ti sei registrato alla nostra piattaforma con successo, di seguito ti riportiamo i dati che ci hai fornito </p>
");
$mail->File("images/logo.PNG");
if ($mail->Send()) echo 'Mail sent successfully';
else               echo 'Mail failure';


?>