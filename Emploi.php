<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Recherche d'emploi</title>
    <style>
    body {
        font-family: 'Roboto', sans-serif;
        background: #e8f0f8;
        padding: 40px;
        display: flex;
        justify-content: start;
    }

    form {
        width: 480px;
        background: #ffffff;
        padding: 25px;
        border: 2px solid #3498db;
        border-radius: 2px;
        margin-left: 60px;
    }

    legend {
        font-size: 1.3em;
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 15px;
        border-bottom: 1px solid #3498db;
        padding-bottom: 5px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        margin-bottom: 4px;
        color: #2c3e50;
        font-weight: 500;
        font-size: 0.95em;
    }

    input[type="text"],
    input[type="number"],
    select {
        width: 100%;
        padding: 8px 10px;
        border: 1px solid #bbb;
        border-radius: 2px;
        font-size: 0.95em;
        background-color: #f9f9f9;
        box-sizing: border-box;
    }

    select[multiple] {
        height: 90px;
        background-color: #f0f6fc;
    }

    .checkbox-group {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 6px 10px;
    }

    .checkbox-group label {
        padding: 5px 8px;
        background: #f0f6fc;
        border: 1px solid #ccc;
        border-radius: 2px;
        font-size: 0.9em;
        display: flex;
        align-items: center;
    }

    .checkbox-group label:hover {
        background: #e0ecf8;
    }

    .checkbox-group input {
        margin-right: 6px;
        transform: scale(1.1);
    }

    .btn-group {
        text-align: right;
        margin-top: 20px;
    }

    input[type="submit"] {
            background-color:rgb(0, 198, 247);
            color: white;
            margin-left: 10px;
        }

        input[type="submit"]:hover {
            background-color:rgb(51, 255, 0);
        }

        input[type="reset"] {
            background-color:rgb(0, 145, 255);
            color: white;
        }

        input[type="reset"]:hover {
            background-color:rgb(255, 25, 0);
        }
</style>
</head>
<body>

    <form method="post" action="exemple6.3.php">
        <legend>Formulaire Emploi</legend>

        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" required />
        </div>

        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" required />
        </div>

        <div class="form-group">
            <label for="age">Âge</label>
            <input type="number" name="age" step="1" required />
        </div>

        <div class="form-group">
            <label for="langues">Langues pratiquées</label>
            <select name="langues" multiple>
                <option value="français">Français</option>
                <option value="anglais">Anglais</option>
                <option value="allemand">Allemand</option>
                <option value="espagnol">Espagnol</option>
            </select>
        </div>

        <div class="form-group">
            <label>Compétences informatiques</label>
            <div class="checkbox-group">
                <label><input type="checkbox" name="competent[]" value="HTML 5" /> HTML 5</label>
                <label><input type="checkbox" name="competent[]" value="CSS 3" /> CSS 3</label>
                <label><input type="checkbox" name="competent[]" value="PHP" /> PHP</label>
                <label><input type="checkbox" name="competent[]" value="MySQL" /> MySQL</label>
            </div>
        </div>

        <div class="btn-group">
            <input type="reset" value="EFFACER" />
            <input type="submit"  value="ENVOI" />
        </div>
    </form>

</body>
</html>
