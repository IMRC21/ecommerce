<?php
    $usr = $_POST["usr"];
    $psw = $_POST["psw"];
    mysql_connect('localhost', 'root', '') or die(mysql_error());
    mysql_select_db("negozio") or die(mysql_error());
    $sql = "SELECT password FROM user WHERE username='$usr'";
    $result = mysql_query($sql) or die(mysql_error());  
    $verificato = false;
    while($r = mysql_fetch_array($result)){
        echo $r["password"];
        echo "<br>";
        $verificato = password_verify($psw, $r["password"]);
    }
    echo $verificato;


?>