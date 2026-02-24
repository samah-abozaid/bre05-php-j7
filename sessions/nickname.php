<?php
session_start();

if (isset($_GET['pseudo'])) {
    $_SESSION['pseudo'] = $_GET['pseudo'];

} else {
    echo "Pseudo vide.";
}
