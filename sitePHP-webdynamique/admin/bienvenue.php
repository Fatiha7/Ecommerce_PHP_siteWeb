<?php
session_start();
if(isset($_SESSION["email"])){
    echo '<h3>Login success...</h3><br><h1>Bienvenue dans votre Panier , amusez vous bien </h1>';
    echo '<br><BR><a href="logout.php">logout</a>';
    echo '<br><a href="../includes/panier.php">Contenu</a>';
}
?>