<?php 
    include "components/head.php";
?>

<body>
    <?php 
        include "components/header.php";
        include "components/prodotti.php";
        if(isset($_SESSION["id_u"])){
            echo "<h1>" . $_SESSION["id_u"] . "</h1>";
        }
        include "components/footer.php";
    ?>
</body>
</html>