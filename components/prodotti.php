<style>
    .container{
        margin: 3%;
        display: inline-block;
        width: 300px;
        border: 2px solid black;
        padding: 20px;
    }
</style>
<?php
    $sql = "SELECT nome,marca,prezzo FROM prodotto";
    $r = $conn->query($sql);
    while($row = mysql_fetch_array($r)or die(mysql_error())){
        echo $row["nome"];
    }

?>

<div class="container">

        <img src="" />
        <h1>
            Nome a caso
        </h1>
        <h2>
            Una piccola descrizione che spiega che cos'è il prodotto
        </h2>
        <p>
            350€
        </p>

</div>

<div class="container">

        <img src="" />
        <h1>
            Nome a caso
        </h1>
        <h2>
            Una piccola descrizione che spiega che cos'è il prodotto
        </h2>
        <p>
            350€
        </p>

</div>

<div class="container">

        <img src="" />
        <h1>
            Nome a caso
        </h1>
        <h2>
            Una piccola descrizione che spiega che cos'è il prodotto
        </h2>
        <p>
            350€
        </p>

</div>