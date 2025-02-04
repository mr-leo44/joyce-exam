<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
  $nom= $_POST['nom'];
  $email= $_POST['email'];
  $motdepasse= $_POST['motdepasse'];

  if (empty($nom) || empty($email) || empty($motdepasse)) {
    echo"Tous les champs sont obligatoires.";
  } else {
    // Hacher le mot de passe
    $motdepasseHache= password_hash($motdepasse, PASSWORD_BCRYPT);
  }

  // vérification si l'email existe
  $users= file('users.txt', FILE_IGNORE_NEW_LINES);
  // var_dump($users);
  // die();
  foreach($users as $user){
    if (strpos($user, "Email: $email")!== false){
        echo"Cet email est déjà utilisé";
        exit;
    }
  }

  // Ajouter l'utilisateur au fichier
  $userInfo="Nom: $nom |  Email: $email |  Password: $motdepasseHache\n";
  file_put_contents('users.txt', $userInfo, FILE_APPEND);
  echo"Merci $nom, votre inscription est réussie.";
}
