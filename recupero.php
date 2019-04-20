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
        width:100%;
        margin-bottom: 1%;
    }
</style>

<?php
    include "components/head.php";
    include "components/header.php";
?>
<div id="parent">
    <form id="child" action="components/sendReset.php" method="POST">
        <b><Label style="display: block;padding-bottom: 2%;font-size: 22px;margin:0.67em 0">Inserisci il tuo indirizzo email per recuperare la tua password</label></b>
        <input class="inpT" type="text" palceholder="email@example.com" name="email" />
        <input class="inpS" type="submit" />
    </form>
</div>