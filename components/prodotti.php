<style>
    .container{
        margin: 1%;
        display: inline-block;
 
        border: 2px solid black;
        padding: 20px;
    }
    @media only screen and (min-width: 1000px) {
        .container{
            width: 19%;
        }
    }

    .container h2{
        font-family: arial;
    }
    .button{
        padding: 5px;
        background-color: #212121;
        color: white;        
    }
</style>
<?php
    if($_GET){
        //echo "<script> alert('sei uno scemo')</script>";
        $shp = $_GET["ID_prod"] . ",";
        if(isset($_COOKIE["cart"])){
            $shp = $_COOKIE["cart"] . $shp;
        }
        setcookie("cart", $shp, time() + 3600);
        
    }
    // $sql = "SELECT nome,marca,prezzo FROM prodotto";
    // $r = $conn->query($sql);
    // while($row = mysql_fetch_array($r)or die(mysql_error())){
    //     echo $row["nome"];
    // }
    unset($_GET);
    echo $_COOKIE["cart"];
?>

<div class="container">

        <img src="" />
        <form action="index.php" method="GET" >
            <h1>Nome a caso</h1>
            </a>
            <h2>
                Una piccola descrizione che spiega che cos'è il prodotto
            </h2>
            <h1>
                350€
            </h1>
            <h2>
                Rating:
                <span>3.4 ★</span>
            </h2>
            <input type="hidden" value="5" name="ID_prod" />
            <input class="button" type="submit" value="acquista"> 
        </form>
</div>


<div class="container">

        <img src="" />
        <form action="components/prodotto.php">
            <h1>Nome a caso</h1>
            </a>
            <h2>
                Una piccola descrizione che spiega che cos'è il prodotto
            </h2>
            <h1>
                350€
            </h1>
            <h2>
                Rating:
                <span>3.4 ★</span>
            </h2>
            <input type="hidden" value="2" name="ID_prod" />
            <input class="button" type="submit" value="acquista"> 
        </form>
</div>


<div class="container">

        <img src="" />
        <form action="components/prodotto.php">
            <h1>Nome a caso</h1>
            </a>
            <h2>
                Una piccola descrizione che spiega che cos'è il prodotto
            </h2>
            <h1>
                350€
            </h1>
            <h2>
                Rating:
                <span>3.4 ★</span>
            </h2>
            <input type="hidden" value="2" name="ID_prod" />
            <input class="button" type="submit" value="acquista"> 
        </form>
</div>


<div class="container">

        <img src="" />
        <form action="components/prodotto.php">
            <h1>Nome a caso</h1>
            </a>
            <h2>
                Una piccola descrizione che spiega che cos'è il prodotto
            </h2>
            <h1>
                350€
            </h1>
            <h2>
                Rating:
                <span>3.4 ★</span>
            </h2>
            <input type="hidden" value="2" name="ID_prod" />
            <input class="button" type="submit" value="acquista"> 
        </form>
</div>


<div class="container">

        <img src="" />
        <form action="components/prodotto.php">
            <h1>Nome a caso</h1>
            </a>
            <h2>
                Una piccola descrizione che spiega che cos'è il prodotto
            </h2>
            <h1>
                350€
            </h1>
            <h2>
                Rating:
                <span>3.4 ★</span>
            </h2>
            <input type="hidden" value="2" name="ID_prod" />
            <input class="button" type="submit" value="acquista"> 
        </form>
</div>