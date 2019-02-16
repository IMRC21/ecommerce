<?php
    include "components/head.php";
    include "components/header.php";
    if(isset($_SESSION["username"])){
?>
    <div id="profilo">
        <h1> Username: <?php echo $_SESSION["username"]; ?></h1>
        <h1> Nome: <?php echo $_SESSION["nome"]; ?></h1>
        <h1> Cognome: <?php echo $_SESSION["cognome"]; ?></h1>
        <h1> Nazione: <?php echo $_SESSION["nazione"]; ?></h1>
    </div>
<?php }else{ 
        header('Location: http://localhost:8889/ecommerce/login.php?login=true');
    }
    ?>


