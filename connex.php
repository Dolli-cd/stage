<?php
session_start();

$host = 'localhost';
$dbname = 'emploi_db';
$username = 'root';
$password = '';
$erreur = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $mot_de_passe = $_POST['passwd'];

        $stmt = $pdo->prepare("SELECT * FROM membres WHERE email = :email");
        $stmt->execute(['email' => $email]);
        $utilisateur = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($utilisateur && password_verify($mot_de_passe, $utilisateur['passwd'])) {
            $_SESSION['id'] = $utilisateur['id'];
            $_SESSION['nom'] = $utilisateur['nom'];
            $_SESSION['prenom'] = $utilisateur['prenom'];
            header('Location: main.php');
            exit;
        } else {
            $erreur = "Email ou mot de passe incorrect.";
        }
    }
} catch (PDOException $e) {
    $erreur = "Erreur de connexion : " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Connexion</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #ddefff, #e2eafc);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }

    .container {
      background: white;
      padding: 40px 30px;
      border-radius: 12px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
      max-width: 400px;
      width: 100%;
    }

    h2 {
      text-align: center;
      color: #333;
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-top: 10px;
      font-weight: 600;
      color: #555;
    }

    input {
      width: 100%;
      padding: 10px 12px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 14px;
      transition: border-color 0.3s ease;
    }

    input:focus {
      border-color: #007bff;
      outline: none;
      box-shadow: 0 0 0 2px rgba(0, 123, 255, 0.15);
    }

    .btn {
      width: 100%;
      padding: 12px;
      margin-top: 20px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 8px;
      font-weight: bold;
      cursor: pointer;
      font-size: 15px;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #0056b3;
    }

    .error {
      margin-top: 15px;
      color: #e74c3c;
      background: #fdecea;
      padding: 10px;
      border-radius: 8px;
      font-weight: 600;
      text-align: center;
    }

    @media (max-width: 480px) {
      .container {
        padding: 30px 20px;
      }
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Connexion</h2>

  <?php if (!empty($erreur)) : ?>
    <div class="error"><?= htmlspecialchars($erreur) ?></div>
  <?php endif; ?>

  <form method="POST" action="connex.php">
    <label for="email">Email :</label>
    <input type="email" name="email" required>

    <label for="passwd">Mot de passe :</label>
    <input type="password" name="passwd" required>

    <button type="submit" class="btn">Se connecter</button>
  </form>
</div>

</body>
</html>
