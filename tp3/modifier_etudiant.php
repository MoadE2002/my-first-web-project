<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Page Title</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  
  <script src='main.js'></script>
  <link rel='stylesheet' type='text/css' media='screen' href='mn.css'>
</head>
<body>
  <header>  <h1 align="center">Modification d'Etudiant</h1></header>
   <?php
    require_once 'connexion.php';

    $matricule = $_GET['matricule'];
    $resultat = mysqli_query($bd, "SELECT * FROM etudiants WHERE matricule='$matricule'");
		$etudiant = mysqli_fetch_assoc($resultat);

   if (isset($_POST['modifier'])) {
    // $mat=$_POST['matricule'];
    // $nom = $_POST['nom'];
    // $prenom = $_POST['prenom'];
    // $date_naissance = $_POST['date_n'];
    // $adresse=$_POST['adresse'];
    // $sexe=$_POST['sexe'];
         extract($_POST);
    
    mysqli_query($bd, "UPDATE etudiants SET nom='$nom', prenom='$prenom', date_naiss='$date_n',sexe='$sexe',adresse='$adresse' WHERE matricule='$matricule'");
    
    mysqli_close($bd);
    header("Location: liste_etudiants.php");
    
}
?>
<div class="form">
  <form method="post">
    <table>
      <tr>
        <td>Matricule:</td>
        <td><input type="text" name="matricule" value="<?php echo $etudiant['matricule'];  ?>" hidden ></td>
      </tr>
      <tr>
        <td>Nom:</td>
        <td><input name="nom" type="text" value="<?php echo $etudiant['nom']; ?>" required></td>
      </tr>
      <tr>
        <td>Prenom:</td>
        <td><input name="prenom" type="text" value="<?php echo $etudiant['prenom']; ?>" required></td>
      </tr>
      <tr>
        <td>Date de naissance:</td>
        <td><input name="date_n" type="date" value="<?php echo $etudiant['date_naiss']; ?>" required></td>
      </tr>
      <tr>
        <td>Sexe:</td>
        <td>
          <select name="sexe" value="<?php echo $etudiant['sexe']; ?>">
            <option value="M" <?php if($etudiant['sexe']=="M") echo "selected"; ?>>Masculin</option>
            <option value="F" <?php if($etudiant['sexe']=="F") echo "selected"; ?>>Feminin</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>Adresse:</td>
        <td><input name="adresse" type="text" value="<?php echo $etudiant['adresse']; ?>" required></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" value="Modifier" name='modifier'></td>
      </tr>
    </table>
   
 </form>
</div>
</body>
</html>

