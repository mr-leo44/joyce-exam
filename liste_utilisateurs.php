<?php
$users = file('users.txt', FILE_IGNORE_NEW_LINES);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilissateurs</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <nav>
    <ul>
      <li><a href="liste_utilisateurs.php">Listes des utilisateurs</a></li>
    </ul>
    </nav>
  </header>
  <main>
    <h1>Tous les utilisateurs</h1>
    <table>
      <thead>
        <tr>
          <th>Nom</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
        <?php
          if (count($users) > 0){
            foreach ($users as $user){
              list($nom, $email, $motdepasse) = explode("|", $user);
              $nameData = explode(": ", $nom)[1];
              $emailData = explode(": ", $email)[1];
              echo "<tr><td>{$nameData}</td><td>{$emailData}</td></tr>";
            }
          } else {
            echo "<tr><td colspan='2' style='text-align:center;'>Aucun utilisateur enregistré</td></tr>";
          }
        ?>
      </tbody>
    </table>
  </main>
  <footer>
    <p>&copy;2025 Tous droits réservés.</p>
  </footer>
</body>
</html>
