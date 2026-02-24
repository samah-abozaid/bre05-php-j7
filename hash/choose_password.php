<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Choisir un mot de passe</title>
</head>
<body>
    <h2>Choisissez un mot de passe</h2>
    <form action="hash_password.php" method="POST">
        <label for="passWord">Mot de passe :</label>
       
        <input type="password" name="passWord" id="passWord" required>
        <br><br>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>
