<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>

/* Conteneur principal */
h2 {
    font-size: 24px;
    margin-bottom: 20px;
    color: #333;
}

table {
    width: 80%;
    margin-top: 20px;
    border-collapse: collapse;
    background-color: #fff;
    border: 1px solid #ddd;
}

th, td {
    padding: 12px 20px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color:rgb(234, 246, 234);
    color: white;
}

td {
    font-size: 16px;
    color: #555;
}

/* Bordure et couleur alternée */
tr:nth-child(even) {
    background-color: #f9f9f9;
}

tr:hover {
    background-color: #f1f1f1;
}

/* Position des boutons */
button {
    background-color:rgb(31, 202, 215);
    color: white;
    padding: 10px 20px;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin: 10px;
}

button:hover {
    background-color:rgb(38, 0, 255);
}

button:focus {
    outline: none;
}

/* Alignement des boutons sous la table */
.button-container {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}


</style>

<body>
    
<?php
    $host = 'localhost'; 
    $dbname = 'emploi_db';
    $user = 'root';
    $pass = '';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    } catch (PDOException $e) {
        die("Erreur de connexion : " . $e->getMessage());
    }
    
    // Récupération des données du formulaire
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        
        $nom=$_POST["nom"];
        $prenom=$_POST["prenom"];
        $age=$_POST["age"];
        $lang =$_POST["langues"];
        $competent_str=implode(", ",$_POST["competent"]);
        

    }
    

       
    
    // Insertion dans la base
    $stmt = $pdo->prepare("INSERT INTO users (nom, prenom, age, langue, skills) VALUES (?, ?, ?, ?, ? )");
    $stmt->execute([$nom, $prenom, $age, $lang, $competent_str]);
    ?>

<?php
// Récupération des données pour affichage
$stmt = $pdo->query("SELECT * FROM users");
$utilisateurs = $stmt->fetchAll();

?>
<!-- Affichage dans un tableau -->
<a href="Emploi.php"><button>Ajouter</button></a>

<h2>Liste des utilisateurs / contenu de la base de données / Inscriptions  </h2>
<table border="1" cellpadding="8">
    <tr>
        <th>Radio</th>
        <th>ID</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Âge</th>
        <th>Langues pratiquées</th>
        <th>Compétences</th>
    </tr>
<?php foreach ($utilisateurs as $user): ?>
    <tr>
        <td><input type="radio"></td>
        <td><?= htmlspecialchars($user['id']) ?></td>
        <td><?= htmlspecialchars($user['nom']) ?></td>
        <td><?= htmlspecialchars($user['prenom']) ?></td>
        <td><?= htmlspecialchars($user['age']) ?></td>
        <td><?= htmlspecialchars($user['langue']) ?></td>
        <td><?= htmlspecialchars($user['skills']) ?></td>
    </tr>
<?php endforeach; ?>
</table>

<a href="Emploi.php"><button id="submitBtn">Modifier</button></a>

<script>
function enterEditMode() {
    const selected = document.querySelector('input[name="selectedUser"]:checked');
    if (!selected) {
        alert("Veuillez sélectionner un utilisateur.");
        return;
    }

    const row = selected.closest('tr');
    const id = row.dataset.id;
    const nom = row.dataset.nom;
    const prenom = row.dataset.prenom;
    const age = row.dataset.age;
    const langue = row.dataset.langue;
    const skills = row.dataset.skills.split(", ");

    // Remplir le formulaire
    document.getElementById("userId").value = id;
    document.getElementById("nom").value = nom;
    document.getElementById("prenom").value = prenom;
    document.getElementById("age").value = age;
    document.getElementById("langue").value = langue;

    // Cocher les compétences
    const checkboxes = document.querySelectorAll('input[name="competent[]"]');
    checkboxes.forEach(cb => {
        cb.checked = skills.includes(cb.value);
    });

    // Mettre à jour bouton et titre
    document.getElementById("submitBtn").textContent = "Modifier";
    document.getElementById("form-title").textContent = "Modifier l'utilisateur";
}
</script>

</body>
</html>

</body>
</html>
    
    




   
