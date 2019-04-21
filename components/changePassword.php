<?php
    $pswC = password_hash($_POST["pass"], PASSWORD_BCRYPT);
    mysql_connect('localhost', 'root', '') or die(mysql_error());
    mysql_select_db("negozio") or die(mysql_error());
    $sql = "UPDATE user SET password='$pswC' where ID_utente=". $_POST["id"] .";";
    $result = mysql_query($sql) or die(mysql_error());
    mysql_close();
    header("Location: http://localhost:8889/ecommerce/profilo.php");
?>