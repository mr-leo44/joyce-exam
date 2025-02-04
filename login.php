<?php
if ($_SERVER["REQUEST_METHOD"] === "POST"){
  //Recuperation des valeurs du formulaire
  $email= $_POST['email'];
  $motdepasse = $_POST['motdepasse'];
  $users= file('users.txt', FILE_IGNORE_NEW_LINES);

  $userData = [];
  $message = "";
  foreach ($users as $user){
    list($nom, $emailStored, $motdepasseStored)= explode(" | ", $user);
    $user_name = explode(": ", $nom)[1];
    $user_email = explode(": ", $emailStored)[1];
    $user_password = explode(": ", $motdepasseStored)[1];
    
    if ($user_email === $email && password_verify($motdepasse, $user_password)){
      $userData = [$user_name, $user_email];
    }
  }
  if (!empty($userData)){
    echo $message = "Bienvenue ".$userData[0];

    $_SESSION['user'] = $userData;
    header('Location: dashboard.php');
    exit;
  } else {
    echo $message = "Email ou mot de passe incorrect";
  }
}
?>