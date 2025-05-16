<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sécurisation des champs
    $nom = isset($_POST['nom']) ? trim($_POST['nom']) : null;
    $prenom = isset($_POST['prenom']) ? trim($_POST['prenom']) : null;
    $mail = isset($_POST['email']) ? trim($_POST['email']) : null;
    $passwd = isset($_POST['passwd']) ? password_hash($_POST['passwd'], PASSWORD_DEFAULT) : null;

    if ($nom && $prenom && $mail && $passwd) {
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=emploi_db;charset=utf8", 'root', '');

            $stmt = $pdo->prepare("INSERT INTO membres (nom, prenom, email, passwd) VALUES (?, ?, ?, ?)");
            $stmt->execute([$nom, $prenom, $mail, $passwd]);

            echo "Utilisateur enregistré avec succès.";
            header('Location: connex.php');
        } catch (PDOException $e) {
            die("Erreur de connexion ou d'exécution : " . $e->getMessage());
        }
    } else {
        echo "Tous les champs sont obligatoires.";
    }
}



?>
