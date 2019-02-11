<?php
    $usr = $_POST["usr"];
    $psw = $_POST["psw"];
    mysql_connect('localhost:8889', 'root', '') or die(mysql_error());
    mysql_select_db("negozio") or die(mysql_error());
    $sql = "INSERT INTO utente('username','password')VALUES('$usr','$psw');";
    $result = mysql_query($query);

?>