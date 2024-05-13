<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Liste D'etudiants</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-mIHezLjtQqCteVR7TzI6kZhFwJqT2fzvmGrUzZ+ttS+qO6rJ/8WFKZcN1g4v6xJr5KszjszJhQqXudc+eYUBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel='stylesheet'  href="mn.css">
  <script src='main.js'></script>
  <style>
     .r {
  position: fixed;
  top: 20px;
  left: 5px;
}


.r a {
  display: inline-block;
  padding: 10px 20px;
  background-color: #da0a0a;
  border: none;
  border-radius: 5px;
  text-decoration: none;
  color: #fff7f7;
  font-weight: bold;
}

  </style>
</head>
<body>
  <header>
  <h1 align="center">Liste des etudiants</h1></header>
   <main>
    <div class="container">
   <table align="center">
    <tr >
      <th>Matricule</th>
      <th>Nom</th>
      <th>prenom</th>
      <th>Date de naissance</th>
      <th>Sexe</th>
      <th>Adresse</th>
      <th colspan="2">Action</th>
    </tr>
    <?php 
     $bd=mysqli_connect("localhost","root","","bd_tp_php") or die(mysqli_connect_error());
     

     $res=mysqli_query($bd, "SELECT * FROM etudiants");

     while($rows = mysqli_fetch_assoc($res)){
      echo "<tr><td>".$rows['matricule']."</td>";
      echo "<td>".$rows['nom']."</td>";
      echo "<td>".$rows['prenom']."</td>";
      echo "<td>".$rows['date_naiss']."</td>";
        if($rows['sexe']=='M')
         echo "<td>Masculin</td>";
         
        else echo "<td>Feminin</td>";
      echo "<td>".$rows['adresse']."</td>";
      echo "<td>";
      echo "<a href='modifier_etudiant.php?matricule=".$rows['matricule']."'></a>";
      echo "    //  <a href='supprimer_etudiant.php?matricule=".$rows['matricule']."'><i class='fas fa-trash'></i></a>";
      echo "</td>";
      echo "</tr>";
     }
     
    ?>
    <button class="add-button">
    <i id="i1" class="fas fa-plus"></i> 
   <a id="a1" href="ajouter_etudiant.php"> Ajouter un etudiant  </a>
  </button>
   
  </table>
   <p><?php echo "Le nombre d etudiants insérés est: ".mysqli_num_rows($res); ?></p>
   <?php
    mysqli_free_result($res);
    mysqli_close($bd);
   ?>
  </div>
  </main>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-ewIsKq+7jyiXG9z0p4N/TxXq3V4/KB0QgSjedFf6A43bH2Lq/Zx00Nfy2YKEx+89iGfrL2s+AVpwmb+0OMZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <div class="r">
  <a href="http:/php/projetWeb/php.php">Retour</a>
</div>
</body>
</html>