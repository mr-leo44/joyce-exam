<?php
session_start();
if(!isset($_SESSION['user'])){
  header('Location: connexion.html');
  exit;
} 
?>

<!DOCTYPE html>
<html lang="fr-FR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <nav>
      <ul>
        <li>
          <form class="form" action="logout.php" method="POST">
            <button type="submit">Deconnexion</button>
          </form>
        </li>
      </ul>
    </nav>
  </header>
  <main>
    <h1><?= "Bienvenue " . $_SESSION['user'][0] ?></h1>
    <p><a href="profil.php" class="profile">Voir votre profil</a></p>
  </main>
  <footer>
    <p>&copy;2025 Tous droits réservés.</p>
  </footer>
</body>
</html>