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
            $_SESSION["last_login"] = $r["last_login"];
            $_SESSION["registrazione"] = $r["registrazione"];
            echo "<center><h1 style='font-family: arial'>Login eseguito correttamente</h1></center>";
            echo $_SESSION["id_u"];
            $sql = "UPDATE user SET last_login=CURDATE() WHERE ID_utente=" . $_SESSION["id_u"] . ";";
            mysql_query($sql) or die(mysql_error());
            mysql_close();
            header('Location: http://localhost/ecommerce');
        }
        else{
            header('Location: http://localhost/ecommerce/login.php?sbagliato=true');
        }
    }
    
   
?>