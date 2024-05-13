<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Page Title</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='mn.css'>
  <script src='main.js'></script>
  
</head>
<body>


   <?php
    require_once 'connexion.php';

    if (isset($_POST['ajouter'])) {
    // $mat=$_POST['matricule'];
    // $nom = $_POST['nom'];
    // $prenom = $_POST['prenom'];
    // $date_naissance = $_POST['date_n'];
    // $adresse=$_POST['adresse'];
    // $sexe=$_POST['sexe'];
    extract($_POST);
    mysqli_query($bd, "INSERT INTO etudiants VALUES('$matricule', '$nom', '$prenom', '$date_n', '$sexe', '$adresse')");
    
    mysqli_close($bd);
    header("Location: liste_etudiants.php");
    
}


?>
<header><h1>Ajout</h1></header>
<div class="form">
  <form  method="post">
    <table>
      <tr>
        <td>Matricule:</td>
        <td><input type="text" name="matricule" ></td>
      </tr>
      <tr>
        <td>Nom:</td>
        <td><input name="nom" type="text" required></td>
      </tr>
      <tr>
        <td>Prenom:</td>
        <td><input name="prenom" type="text"  required></td>
      </tr>
      <tr>
        <td>Date de naissance:</td>
        <td><input name="date_n" type="date"  required></td>
      </tr>
      <tr>
        <td>Sexe:</td>
        <td>
          <select name="sexe" >
            <option value="M">Masculin</option>
            <option value="F">Feminin</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>Adresse:</td>
        <td><input name="adresse" type="text" required></td>
      </tr>
      <tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" value="Ajouter" name='ajouter'> </td>
      </tr>
      <tr><a class="back_btn" href="liste_etudiants.php">Retour</a></tr>
    </table>
   
 </form>
</div>
</body>
</html>