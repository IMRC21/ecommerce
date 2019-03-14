<style>
    a{
        color: black;
        text-decoration: none;
    }
    a h1{
        font-family: 'Lobster', cursive;
        
    }

    .topnav {
        background-color: #08566d;
        overflow: hidden;
    }

    #header{
        display: flex;
        width: 100%;
        justify-content: space-between;
        flex-direction: row;
        background-color: white;
    }
    
    .tasti{
        margin: 3px;
        padding: 3%;
        color: white;
        background-color: #08566d;
        align-self: center;
        width: 100%;
    }

    #blocco-destra{
        padding-top: 1%;
        display: flex;
    }

    .blocco{
        width: 200px;
    }

    .topnav a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
    }

    .topnav a:hover {
    background-color: #ddd;
    color: black;
    }
    #login{
        float: right;
    }
    @media only screen and (max-width: 600px) {
        #blocco-sin{
            display: none;
        }
        #header a h1{
            margin-left: 3%;
        }
    }
</style>
<header>
    <div id="header">
        <div id="blocco-sin" class="blocco">
            
        </div>
        <a href="<?php  echo $_SERVER["PHP_SELF"]   ?>/ecommerce">
            <h1>
                Super e-Commerce
            </h1>
        </a>
        <div id="blocco-destra" class="blocco">
            <?php
                if(isset($_SESSION["id_u"])){
            ?>
                <a href="<?php  echo $_SERVER["PHP_SELF"]   ?>/ecommerce/profilo.php">
                    Bentornato, <?php echo $_SESSION["nome"] ?>
                </a>
                <br>
                <a href="<?php  echo $_SERVER["PHP_SELF"]   ?>/ecommerce/components/esci.php">
                    Esci
                </a>
            <?php
                }else{
            ?>
                <a class="tasti" href="<?php  echo $_SERVER["PHP_SELF"]   ?>/ecommerce/login.php?login=true">
                    Login
                </a>
                <a class="tasti" href="<?php  echo $_SERVER["PHP_SELF"]   ?>/ecommerce/login.php?login=false">
                    Register
                </a>
            <?php
                }
            ?>
        </div>
    </div>
    <div class="topnav">
        <a class="active" href="<?php  echo $_SERVER["PHP_SELF"]   ?>/ecommerce">Home</a>
        <a href="<?php  echo $_SERVER["PHP_SELF"]   ?>/ecommerce/news.php">News</a>
    </div>
</header>


