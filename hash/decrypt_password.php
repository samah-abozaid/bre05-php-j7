<?php
if (isset($_POST['passWord']) && isset($_POST['hashedPassword'])) {
    $motDePass = $_POST['passWord'];
    $hash = $_POST['hashedPassword'];

    // Vérification du mot de passe
    if (password_verify($motDePass, $hash)) {
        echo "<h2>Mot de passe correct</h2>";
    } else {
        echo "<h2>Mot de passe erroné</h2>";
    }
} else {
    echo "Veuillez remplir les deux champs du formulaire.";
}
?>
