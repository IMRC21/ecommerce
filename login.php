<style>
    .separate:first-child{
        margin-top: 1%;
        margin-bottom: 1%;
    }
    .separate{
        display: block; 
        margin-top: 2%;
        /*font-family: 'VT323', monospace;*/
    }
    .separate{
        font-size: 20px;
    }

    .separate input{
        padding: 5px;
        color: #964e12;	
    }
    #parent{
        height: 80%;
        display: flex;
        justify-content: center;
        align-items: center;
        
    }
    #child{
        border: solid 2px #08566d;
        border-top: solid 10px #08566d;
        color: #964e12;
        padding: 3%;
        background-color: #f6f0ca;
        font-family: arial;
    }
    @media only screen and (max-width: 600px){
        #child{
            padding: 5%;
        }
    }
    body{
        background-color: #f6f0ca;
    }    
    #btn-s{
        display: flex;
        justify-content: center;
        
    }
    #btn-s input{
        background-color: #08566d;
        color: white;
        width: 100%;
    }
    #btn-s button{
        background-color: #08566d;
        color: white;
        width: 100%;
    }
    #btn-s a{
        background-color: #08566d;
        color: white;
        width: 100%;
    }
    .verifica{
        color: red;
        display: none;
    }
    .mostra{
        display: block;
    }
</style>

<?php   
    include "components/head.php";
    include "components/header.php";
    $riceviRichiesta = $_GET["login"];
    echo '<script src="controllo.js"></script>';
    echo '<body>';
    $err = false;
    if(isset($_get["errore"]))
        $err = $_GET["errore"];
    if($riceviRichiesta == "true"){
        if($err == true ){
            echo '
                <div id="parent">
                    <form id="child" onsubmit="return controllo()" action="components/check.php" method="POST">
                        <h1>
                            Login
                        </h1>
                            <label class=\"verifica\">La password e utente non corrispondono </label>   
                            
                        <div class="separate">
                            <input type="text" id="usr" name="usr" placeholder="Username"/>
                        </div>
                        <div class="separate">
                            
                            <input type="password" id="psw" name="psw" placeholder="Password"/>
                        </div>
                        <!-- <div class="separate">
                            <label for="remember"> remember me </label>
                            <input type="checkbox" name="remember" /> 
                        </div> -->
                        <div class="separate" id="btn-s">
                            <input type="submit" />
                        </div>
                    </form>
                </div>
                ';
            }else{
                echo '
                <div id="parent">
                    <form id="child" onsubmit="return controllo()" action="components/check.php" method="POST">
                        <h1>
                            Login
                        </h1>
                        <div class="separate">
                            <input type="text" id="usr" name="usr" placeholder="Username"/>
                        </div>
                        <div class="separate">
                            
                            <input type="password" id="psw" name="psw" placeholder="Password"/>
                        </div>
                        <div class="separate">
                            <label for="remember">Ricordami</label>
                            <input type="checkbox" name="remember" /> 
                        </div>
                        <div class="separate" id="btn-s">
                            <input type="submit" />
                            
                            <button name="recupero">
                                <a href="recupero.php">Password dimenticata</a>
                            </button>
                            
                        </div>
                    </form>
                </div>
                ';
            }
    }else{
        echo '        
        <div id="parent">
            <script src="js/controllo.js"></script>
            <form id="child"  onsubmit="return controllo()" action="components/invia.php" method="POST">
                <h1>
                    Registrati
                </h1>
                <div class="separate">
                    <label id="lv" class="verifica">Campo vuoto! </label>
                    <input type="text" id="usr" name="usr" placeholder="Username" />
                </div>
                <div class="separate">
                    <label id="nonCombacia"class="verifica">Le password non combaciano</label>
                    <label id="pswVuota" class="verifica">Campo vuoto! </label>
                    <input type="password" id="psw" name="psw" placeholder="Password"/>
                </div>
                <div class="separate">
                    <input type="password" id="pswChk" name="pswChk" placeholder="Ripeti la password" />
                </div>
                
                <div class="separate">
                    <label id="nomeVuoto" class="verifica">Campo vuoto! </label>
                    <input type="text" id="nome" name="nome" placeholder="Nome" />
                </div>
                <div class="separate">
                    <label id="cognomeVuoto" class="verifica">Campo vuoto! </label>
                    <input type="text" id="cognome" name="cognome" placeholder="Cognome" />
                </div>
                <div class="separate">
                    <input type="text" id="nazione" name="nazione" placeholder="Nazione" />
                </div>
                <div class="separate" id="btn-s">
                <input type="submit" />
                </div>
                
            </form>
        </div>
            ';
    }
    echo '</body>';
?>

