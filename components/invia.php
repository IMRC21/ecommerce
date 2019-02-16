<?php
    $usr = $_POST["usr"];
    $psw = $_POST["psw"];
    $pswC = password_hash($psw, PASSWORD_BCRYPT);
    echo $pswC;
    echo "  Lunghezza: ". strlen($pswC);
    mysql_connect('localhost', 'root', '') or die(mysql_error());
    mysql_select_db("negozio") or die(mysql_error());
    $sql = "INSERT INTO user(username, password) VALUES('$usr','$pswC');";
    $result = mysql_query($sql) or die(mysql_error());
    mysql_close();
?>