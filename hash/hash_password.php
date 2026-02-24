// <?php

// if(isset($_POST['passWord'])){
//   $motPass  =   $_POST['passWord']
//   echo "$motPass <br>";
//     $hash = password_hash($password, PASSWORD_DEFAULT); 
//      echo "$hash <br>";
// }





if (isset($_POST['passWord'])) {
    $motPass = $_POST['passWord'];

    // Hachage sécurisé du mot de passe
    $hashedPassword = password_hash($motPass, PASSWORD_DEFAULT);

    // Affichage
    
    echo "Mot de passe original : " .$motPass . "<br>";
    echo "Mot de passe haché : " . $hashedPassword . "<br>";

} else {
    echo "Aucun mot de passe reçu.";
}



 ?>
