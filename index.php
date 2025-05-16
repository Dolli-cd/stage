<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Inscription</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: "Segoe UI", sans-serif;
      background: linear-gradient(145deg, #e0eafc, #cfdef3);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      padding: 20px;
    }

    .form-wrapper {
      background-color: #ffffff;
      padding: 40px;
      border-radius: 16px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      max-width: 400px;
      width: 100%;
    }

    h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #333;
    }

    form label {
      display: block;
      margin-bottom: 8px;
      font-weight: 600;
      color: #444;
    }

    form input {
      width: 100%;
      padding: 12px 14px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 15px;
      transition: border-color 0.3s;
    }

    form input:focus {
      border-color: #007bff;
      outline: none;
      box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.1);
    }

    .btn-primary {
      width: 100%;
      background-color: #007bff;
      color: white;
      padding: 12px;
      border: none;
      font-weight: 600;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
      background-color:rgb(0, 232, 248);
    }

    .login-link {
      text-align: center;
      margin-top: 18px;
      font-size: 14px;
    }

    .login-link a {
      color:rgb(19, 201, 234);
      text-decoration: none;
      font-weight: bold;
    }

    .login-link a:hover {
      text-decoration: underline;
    }

    @media (max-width: 480px) {
      .form-wrapper {
        padding: 30px 20px;
      }

      h2 {
        font-size: 20px;
      }
    }
  </style>
</head>
<body>

  <div class="form-wrapper">
    <h2>Créer un compte</h2>
    <form action="config.php" method="POST">
      <label for="nom">Nom</label>
      <input type="text" id="nom" name="nom" required>

      <label for="prenom">Prénom</label>
      <input type="text" id="prenom" name="prenom" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>

      <label for="passwd">Mot de passe</label>
      <input type="password" id="passwd" name="passwd" required>

      <button type="submit" class="btn-primary">S'inscrire</button>
    </form>

    <div class="login-link">
      Vous avez déjà un compte ? <a href="connex.php">Se connecter</a>
    </div>
  </div>

</body>
</html>
