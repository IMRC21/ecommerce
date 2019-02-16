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
    #child{
        border: solid black 5px;
        max-height: 500px;
        max-width: 500px;
        margin-top: 10%;
    }
</style>

<?php   
    include "components/head.php";
    include "components/header.php";
    $riceviRichiesta = $_GET["login"];
    if($riceviRichiesta == "true"){
        echo '<center>
                <form id="child" action="components/check.php" method="POST">
                    <h1>
                        Login
                    </h1>
                    <div class="separate">
                        <label>Username:</label>
                        <input type="text" name="usr" />
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
            </center>'
            ;
    }else{
        echo '        
            <center>
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
            </center>';
    }
?>

