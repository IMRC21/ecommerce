<style>
    .separate:first-child{
        margin-top: 1%;
    }
    .separate{
        display: block; 
        margin-top: 2%;
        /*font-family: 'VT323', monospace;*/
    }
    .separate label{
        font-size: 20px;
    }
    #parent{
        height: 80%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    #child{
        border: solid black 5px;
        max-height: 500px;
        max-width: 500px;

    }
</style>

<?php   
    include "components/head.php";
    include "components/header.php";
    $riceviRichiesta = $_GET["login"];
    echo '<script src="controllo.js"></script>';
    if($riceviRichiesta == "true"){
        echo '
            <div id="parent">
                <form id="child" onsubmit="return controllo()" action="components/check.php" method="POST">
                    <h1>
                        Login
                    </h1>
                    <div class="separate">
                        <label>Username:</label>
                        <input type="text" name="usr" i/>
                    </div>
                    <div class="separate">
                        <label>Password:</label>
                        <input type="password" name="psw" />
                    </div>
                    <div class="separate">
                        <label for="remember"> remember me </label>
                        <input type="checkbox" name="remember" /> 
                    </div>
                    <div class="separate">
                        <input type="submit" />
                    </div>
                </form>
            </div>
            '
            ;
    }else{
        echo '        
        <div id="parent">
            <script src="js/controllo.js"></script>
            <form id="child" action="components/invia.php" method="POST">
                <h1>
                    Register
                </h1>
                <div class="separate">
                    <label>Username:</label>
                    <input type="text" name="usr" />
                </div>
                <div class="separate">
                    <label>PASSWORD:</label>
                    <input type="password" name="psw" />
                </div>
                <div class="separate">
                    <label>Ripeti la password:</label>
                    <input type="password" name="pswChk" />
                </div>
                
                <div class="separate">
                    <label>Nome:</label>
                    <input type="text" name="nome" />
                </div>
                <div class="separate">
                    <label>Cognome:</label>
                    <input type="text" name="cognome" />
                </div>
                <div class="separate">
                    <label>Nazione:</label>
                    <input type="text" name="nazione" />
                </div>
                <div class="separate">
                <input type="submit" />
                </div>
                
            </form>
        </div>
            ';
    }
?>

