<?php

$host = "localhost";
$user = "tarek";
$password = "tarek";

$base = "ExempleVues"; // script de création dans le dossier "doc"

$connection = new mysqli($host, $user, $password, $base);

$email = $connection->escape_string($_POST["email"]);
$motdepasse = $connection->escape_string($_POST["motdepasse"]);

$requete = "Select email, motdepasse "
        . "from ChefDepartement "
        . "Where email = '$email' and "
        . "motdepasse = '$motdepasse'";

$resultat = $connection->query($requete);

if($resultat->num_rows == 1){
    header("Location:espace_chef_dep.html");
}else{
    header("Location:login_chef_dep.html");
}

