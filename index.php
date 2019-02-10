<!DOCTYPE html>
<html>
<head>
    <?php
        $conn = new mysqli("localhost","root","","negozio");
        include "components/head.php";
    ?>
</head>
<body>
    <?php 
        include "components/header.php";
        include "components/prodotti.php";
    ?>
</body>
</html>