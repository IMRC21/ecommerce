<?php
    require 'Mail.php';

    $mailP = $_POST["email"];
    mysql_connect('localhost', 'root', '') or die(mysql_error());
    mysql_select_db("negozio") or die(mysql_error());
    $sql = "SELECT * FROM user WHERE mail='$mailP'";
    $r = mysql_query($sql) or die(mysql_error());
    if(mysql_num_rows($r)>0){
        echo "trovato " . $mailP;
        while($res = mysql_fetch_array($r)){
            $psw = $res["password"];
            $id = $res["ID_utente"]
        }
        $mail = new SMTPmailer();
        $mail->addTo($mailP);
        $mail->Subject("Recupero password Super e-Commerce");
        $mail->body("
            <link href='https://fonts.googleapis.com/css?family=Lobster|VT323' rel='stylesheet'>
            <center>
                    <h1 style='font-family: Lobster, cursive;'>Super e-Commerce</h1>
            </center>
            <div>
                Hai richiesto il recupero della password, clicca il seguente link per impostare una nuova password:
                <a href='http://localhost:8889/ecommerce/reset.php?key=". $psw . "&id=". $id . "'> Cambia Password </a>
            </div>
        ");
        if ($mail->Send()) echo 'Mail sent successfully';
        else               echo 'Mail failure';
    }else{
        header("Location: http://localhost:8889/ecommerce/recupero.php");
    }

?>