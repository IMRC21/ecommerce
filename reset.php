<?php
    include "components/head.php";
    include "components/header.php";
    echo "
    <script src='js/controllo.js'></script>
    <style>
        #parent{
            height: 80%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size:20px;
        }
        #child{
            border: solid 2px #08566d;
            border-top: solid 10px #08566d;
            color: #964e12;
            padding: 3%;
            background-color: #f6f0ca;
            font-family: arial;
        }
        body{
            background-color: #f6f0ca;
        }
        .inpS{
            background-color: #08566d;
            color: white;
            width: 100%;
            font-size: 30px;
        }
        .inpT{
            padding: 5px;
            color: #964e12;	

            margin-bottom: 1%;
        }
        .verifica{
            display:none;
        }
        .mostra{
            display: blocK; 
            color: red;
            padding-bottom: 1%;
        }
    </style>
    ";
    mysql_connect('localhost', 'root', '') or die(mysql_error());
    mysql_select_db("negozio") or die(mysql_error());
    $id = $_GET["id"];
    $sql = "SELECT * FROM user WHERE ID_utente=".$_GET["id"].";";
    $result = mysql_query($sql) or die(mysql_error());
    while($r = mysql_fetch_array($result)){
        $pswDB = $r["password"];
    }
    if($pswDB == $_GET["key"]){
        echo "<div id='parent'>
                <form id='child' onsubmit='return controlloPsw()' action='components/changePassword.php' method='POST'>
                    <center>
                        <h1> Cambio password </h1>
                    <label id='nonCombacia' class='verifica'><b>Le password non combaciano</b></label>
                    <label><b>Inserisci la nuova password:</b></label>
                    <input id='psw' type='password' class='inpT' name='pass' />
                    <label><b>Conferma la nuova password </b></label>
                    <input id='pswChk' type='password' class='inpT' name='checkPass' />
                    <input type='hidden' value='". $id ."'name='id' />
                    <input type='submit' class='inpS' />
                </form>
              </div>
        ";
    }else{
        header('Location: http://localhost:8889/ecommerce/login.php?sbagliato=true');
    }

?>