<?php
    $usr = $_POST["usr"];
    $psw = $_POST["psw"];
    $nome = $_POST["nome"];
    $cognome = $_POST["cognome"];
    $nazione = $_POST["nazione"];

    $pswC = password_hash($psw, PASSWORD_BCRYPT);
    echo $pswC;
    echo "  Lunghezza: ". strlen($pswC);
    mysql_connect('localhost', 'root', '') or die(mysql_error());
    mysql_select_db("negozio") or die(mysql_error());
    $sql = "INSERT INTO user(nome, cognome, username, password, nazione) VALUES('$nome','$cognome','$usr','$pswC','$nazione');";
    $result = mysql_query($sql) or die(mysql_error());
    mysql_close();
    header('Location: http://localhost:8889/ecommerce/login.php?login=true');
?>