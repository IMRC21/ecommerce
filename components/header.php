<style>
    a{
        color: black;
        text-decoration: none;
    }
    h1{
        font-family: 'Lobster', cursive;
    }

    .topnav {
    background-color: #333;
    overflow: hidden;
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
</style>
<header>

    <center>
    <a href="index.php">
        <h1>
            Super e-Commerce
        </h1>
    </a>
    </center>
    <div class="topnav">
        <a class="active" href="index.php">Home</a>
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
        <a href="login.php?login=true">Login</a>
        <a href="login.php?login=false">Register</a>
    </div>
</header>