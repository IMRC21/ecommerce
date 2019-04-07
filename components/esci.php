
<?php
    include "head.php";
    unset($_SESSION["id_u"]);
    header('Location: http://localhost/ecommerceecommerce/login.php?login=true');
?>