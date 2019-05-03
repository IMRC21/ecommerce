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
        <h1 style="border: 3px solid blacK; display: inline-block; padding: 1%;"><a href="<?php echo "http://localhost:8889/ecommerce/reset.php?key=" . $_SESSION["psw"] . "&id=" . $_SESSION["id_u"] ?>"> 
            Cambia la password 
        </a></h1>
        <h1 style="border: 3px solid blacK; display: inline-block;padding: 1%;"><a target="blank" href="components/downloadData.php"> 
            Scarica i tuoi dati
        </a></h1>
        
    </div>
<?php }else{ 
        header('Location: http://localhost:8889/ecommerce/login.php?login=true');
    }
    ?>


