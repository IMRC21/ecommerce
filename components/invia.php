<?php
    require 'Mail.php';
    $usr = $_POST["usr"];
    $psw = $_POST["psw"];
    $nome = $_POST["nome"];
    $cognome = $_POST["cognome"];
    $nazione = $_POST["nazione"];
    $mailP = $_POST["mail"];

    $pswC = password_hash($psw, PASSWORD_BCRYPT);
    echo $pswC;
    echo "  Lunghezza: ". strlen($pswC);
    mysql_connect('localhost', 'root', '') or die(mysql_error());
    mysql_select_db("negozio") or die(mysql_error());
    $sql = "INSERT INTO user(nome, cognome, username, password, nazione, registrazione, last_login, mail) 
            VALUES('$nome','$cognome','$usr','$pswC','$nazione', CURDATE(), CURDATE(), '$mailP');";
    $result = mysql_query($sql) or die(mysql_error());
    mysql_close();
    
    $mail = new SMTPmailer();
    $mail->addTo($mailP);
    $mail->Subject("Benvenuto in Super ecommerce");
    $mail->body("
        <style>
            #list{
                /*padding: 10px;*/
                font-size: 18px;
            }
            #list span{
                display: block;
                padding-top: 2%;
                padding-bottom: 1%;
            }
            #subtext{
                font-size: 22px;
                padding-left: 0%;
            }
            .container{
                background-color: #212121;
                color: white;
                font-family: arial;
                padding: 3%;
            }
        </style>
        <link href='https://fonts.googleapis.com/css?family=Lobster|VT323' rel='stylesheet'>
        <center>
                <h1 style='font-family: Lobster, cursive;'>Super e-Commerce</h1>
        </center>
        <div class='container'>    
            <h1> Benvenuto, $usr </h1>
            <div id='list'>
                <span id='subtext'><b>Ti sei registrato alla nostra piattaforma con successo, di seguito ti riportiamo i dati che ci hai fornito:</b></span>
                <div style='border-top: 3px solid white;border-bottom: 3px solid white;'>
                    <span><b>Nome:</b> $nome </span>
                    <span><b>Cognome:</b> $cognome </span>
                    <span><b>Nazione:</b> $nazione </span>
                    <span><b>e-Mail:</b> $mailP </span>
                </div>
            </div>
        </div>
    ");
    if ($mail->Send()) echo 'Mail sent successfully';
    else               echo 'Mail failure';
    
    header('Location: http://localhost:8889/ecommerce/login.php?login=true');
?>