
<style>
    a{
        color: black;
        text-decoration: none;
    }
    a h1{
        font-family: 'Lobster', cursive;
    }

    .topnav {
        background-color: #333;
        overflow: hidden;
    }

    #header{
        display: flex;
        width: 100%;
        justify-content: space-between;
        flex-direction: row
    }
    
    .tasti{
        margin: 3px;
        border: 1px solid black;
    }

    #blocco-destra{
        padding-top: 1%;
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
        <a href="http://localhost:8889/ecommerce">
            <h1>
                Super e-Commerce
            </h1>
        </a>
        <div id="blocco-destra" class="blocco">
            <?php
                if(isset($_SESSION["id_u"])){
            ?>
                <p>
                    Bentornato, <?php echo $_SESSION["nome"] ?>
                </p>
            <?php
                }else{
            ?>
                <a class="tasti" href="http://localhost:8889/ecommerce/login.php?login=true">
                    Login
                </a>
                <a class="tasti" href="http://localhost:8889/ecommerce/login.php?login=false">
                    Register
                </a>
            <?php
                }
            ?>
        </div>
    </div>
    <div class="topnav">
        <a class="active" href="http://localhost:8889/ecommerce">Home</a>
        <a href="http://localhost:8889/ecommerce/news.php">News</a>
    </div>
</header>