<style>
    .separate:first-child{
        margin-top: 1%;
    }
    .separate{
        display: block; 
        margin-top: 2%;
        font-family: 'VT323', monospace;
    }
    .separate label{
        font-size: 40px;
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
                <form id="child">
                    <h1>
                        Login
                    </h1>
                    <div class="separate">
                        <label>USERNAME:</label>
                        <input type="text" name="usr" />
                    </div>
                    <div class="separate">
                        <label>PASSWORD:</label>
                        <input type="password" name="psw" />
                    </div>
                    <input type="submit" /> 
                </form>
            </center>';
    }else{
        echo '        
            <center>
            <form id="child" action="components/invia.php" method="POST">
                <h1>
                    Register
                </h1>
                <div class="separate">
                    <label>USERNAME:</label>
                    <input type="text" name="usr" />
                </div>
                <div class="separate">
                    <label>PASSWORD:</label>
                    <input type="password" name="psw" />
                </div>
                <div class="separate">
                <input type="submit" />
                </div>
            </form>
            </center>';
    }
?>

