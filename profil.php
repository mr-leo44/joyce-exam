<?php
session_start();
if (!isset($_SESSION['user'])) {
  header('Location: connexion.html');
  exit;
}
?>

<!DOCTYPE html>
<html lang="fr-FR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="logout.php">Dashboard</a></li>
        <li>
          <form class="form" action="dashboard.php" method="POST">
            <input type="hidden" name="logout" value="logout">
            <button type="submit">Deconnexion</button>
          </form>
        </li>
      </ul>
    </nav>
  </header>
  <main>
    <h1>Bienvenue</h1>
    <p><?= "Votre Nom: " . $_SESSION['user'][0] ?></p>
    <p><?= "Votre Email: " . $_SESSION['user'][1] ?></p>
  </main>
  <footer>
    <p>&copy;2025 Tous droits réservés.</p>
  </footer>
  </body>
</html>
