<?php
    session_start();
    $usr = $_POST["usr"];
    $psw = $_POST["psw"];
    mysql_connect('localhost', 'root', '') or die(mysql_error());
    mysql_select_db("negozio") or die(mysql_error());
    $sql = "SELECT * FROM user WHERE username='$usr'";
    $result = mysql_query($sql) or die(mysql_error());
    $verificato = false;
    while($r = mysql_fetch_array($result)){
        echo "<br>";
        if(password_verify($psw, $r["password"])){
            $_SESSION["id_u"] = $r["ID_utente"];
            $_SESSION["nome"] = $r["nome"];
            $_SESSION["cognome"] = $r["cognome"];
            $_SESSION["nazione"] = $r["nazione"];
            $_SESSION["username"] = $r["username"];
            echo "<center><h1 style='font-family: arial'>Login eseguito correttamente</h1></center>";
            echo $_SESSION["id_u"];
        }
    }
    mysql_close();
    header('Location: http://localhost:8889/ecommerce');
?>