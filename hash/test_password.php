
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FOrmulaire choisir un mot de pass </title>
</head>
<body>
    <h1>Choiser un mote de passe :</h1>
    
    <form action ="decrypt_password.php" method="post">
        <label for="passWord">Password:</label>
        <input type="password" name="passWord">
        <?php
        
        ?>
        <label for="passWordHash">Password Chiffre:</label>
        <input type="password" name="passWordHash">
        <input type="submit">
    </form>
</body>
</html>