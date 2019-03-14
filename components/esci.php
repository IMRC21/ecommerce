<?php
    include "head.php";
    unset($_SESSION["id_u"]);
    header('Location: ' . $_SERVER["PHP_SELF"] . '/ecommerce/login.php?login=true');
?>