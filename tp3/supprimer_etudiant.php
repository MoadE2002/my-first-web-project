
<?php
require_once 'connexion.php';

if (isset($_GET['matricule'])) {
    $matricule = $_GET['matricule'];
    
    
    $sql = "DELETE  FROM etudiants WHERE matricule = '$matricule'";
    $resultat = mysqli_query($bd, $sql);

    if ($resultat) {
        
        header('Location: liste_etudiants.php');
        exit;
    } else {
        echo "Erreur lors de la suppression de l'étudiant.";
    }

}

mysqli_close($bd);
?>
