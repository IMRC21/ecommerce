<?php
    include "head.php";
    unset($_SESSION["id_u"]);
    header('Location: http://localhost:8889/ecommerce/login.php?login=true');
?>