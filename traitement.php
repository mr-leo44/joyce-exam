<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $nom= $_POST['nom'];
    $email= $_POST['email'];
    $motdepasse= $_POST['motdepasse'];

    if (empty($nom) || empty($email) || empty($motdepasse)) {
        echo"Tous les champs sont obligatoires.";
    } 
    echo"Merci $nom, votre inscription est réussie.";
    }
?>