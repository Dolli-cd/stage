
<?php
require 'config-users.php';

try {
    $stmt = $pdo->query("SELECT * FROM membres ORDER BY id DESC");
    $utilisateurs = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erreur lors de la récupération des utilisateurs : " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des utilisateurs</title>
    <style>
        table {
            width: 80%;
            margin: 30px auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ccc;
        }
        th {
            background-color: #eee;
        }
        .actions {
    text-align: center;
    margin-top: 20px;
}

.btn-ajouter {
    display: inline-block;
    background-color:rgb(50, 226, 239);
    color: white;
    padding: 12px 20px;
    text-decoration: none;
    font-weight: bold;
    border-radius: 8px;
    transition: background-color 0.3s ease;
}
.btn-modif {
    display: inline-block;
    background-color:rgb(50, 226, 239);
    color: white;
    padding: 12px 20px;
    text-decoration: none;
    font-weight: bold;
    border-radius: 8px;
    transition: background-color 0.3s ease;
}

.btn-ajouter:hover {
    background-color:rgb(69, 239, 239);
}

    </style>
</head>
<body>
    <h2 style="text-align:center;"> Utilisateurs </h2>
    <div class="actions">
    <a href="index.php" class="btn-ajouter">Ajouter un utilisateur</a>
    
</div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Mot_de_passe</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($utilisateurs) > 0): ?>
                <?php foreach ($utilisateurs as $user): ?>
                    <tr>
                        <td><?= htmlspecialchars($user['id']) ?></td>
                        <td><?= htmlspecialchars($user['nom']) ?></td>
                        <td><?= htmlspecialchars($user['prenom']) ?></td>
                        <td><?= htmlspecialchars($user['email']) ?></td>
                        <td><?= htmlspecialchars($user['passwd']) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="4">Aucun utilisateur trouvé.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
   

</body>
</html>
