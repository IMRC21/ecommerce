<?php
    $usr = $_POST["usr"];
    $psw = $_POST["psw"];
    $sql = "INSERT INTO utente('username','password') VALUES(NULL,$usr,$psw);";
    $conn = new mysqli("localhost","root","","negozio");
    if ($conn->connect_error) {
        die("Connessione al DB non riuscita: " . $conn->connect_error);
    } 
    if ($conn->query($sql) === TRUE) {
        echo "<h1> Registrato correttamente </h1>";
    } else {
        echo "Errore: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>