<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
  $nom= $_POST['nom'];
  $email= $_POST['email'];
  $motdepasse= $_POST['motdepasse'];

  if (empty($nom) || empty($email) || empty($motdepasse)) {
    echo"Tous les champs sont obligatoires.";
  } 

  // Ajouter l'utilisateur au fichier
  $userInfo="Nom: $nom |  Email: $email |  Password: $motdepasseHache\n";
  file_put_contents('users.txt', $userInfo, FILE_APPEND);
  echo"Merci $nom, votre inscription est réussie.";
}
