<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Informations Utilisateur</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 30px;
      background-color: #f0f4f8;
    }

    .container {
      max-width: 400px;
      margin: auto;
      padding: 20px;
      background: white;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      color: #333;
    }

    label {
      display: block;
      margin-top: 10px;
      font-weight: bold;
    }

    input[type="text"] {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    button {
      margin-top: 20px;
      width: 100%;
      padding: 10px;
      background-color: #3498db;
      border: none;
      border-radius: 5px;
      color: white;
      font-size: 16px;
      cursor: pointer;
    }

    button:hover {
      background-color: #2980b9;
    }

    textarea {
      width: 95%;
      margin-top: 20px;
      padding: 10px;
      height: 100px;
      border-radius: 5px;
      border: 1px solid #ccc;
      resize: none;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>Informations Utilisateur</h2>

    <label for="age">Âge :</label>
    <input type="text" id="age" placeholder="Entrez votre âge">

    <label for="ville">Ville :</label>
    <input type="text" id="ville" placeholder="Entrez votre ville">

    <button onclick="afficherInfos()">Afficher les informations</button>

    <textarea id="resultat" readonly></textarea>
  </div>

  <script>
    let nom = prompt("Quel est votre nom ?");

    function afficherInfos() {
      const age = document.getElementById("age").value;
      const ville = document.getElementById("ville").value;

      if (age === "" || ville === "") {
        alert("Veuillez remplir tous les champs !");
        return;
      }

      const phrase = `Bonjour ${nom}, vous avez ${age} ans et vous habitez à ${ville}.`;
      document.getElementById("resultat").value = phrase;
    }
  </script>










    


</body>
</html>
