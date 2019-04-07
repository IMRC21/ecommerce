<?php
    include "components/head.php";
    include "components/header.php";
    if(isset($_SESSION["username"])){
    $ip=$_SERVER['REMOTE_ADDR'];
?>
    <div id="profilo">
        <h1> Username: <?php echo $_SESSION["username"]; ?></h1>
        <h1> Nome: <?php echo $_SESSION["nome"]; ?></h1>
        <h1> Cognome: <?php echo $_SESSION["cognome"]; ?></h1>
        <h1> Nazione: <?php echo $_SESSION["nazione"]; ?></h1>

        <h1>Bentornato, <?php echo $_SESSION["nome"]; ?> <br>
            il tuo ultimo accesso è stato il <?php echo $_SESSION["last_login"]; ?><br>
            ti sei registrato il <?php echo $_SESSION["registrazione"]; ?><br>
            ed il tuo indirizzo IP è: <?php echo $ip ?>
        </h1>
    </div>
<?php }else{ 
        header('Location: http://localhost/ecommerceecommerce/login.php?login=true');
    }
    ?>


