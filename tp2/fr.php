<html>
<body>
<?php
if(isset($_POST['Envoyer'])){
  
    echo "<center><h5> Envoi avec Succés </h5></center><br>";
    $op=fopen("data.txt","a+");
    fwrite($op,$_POST['nom'].",".$_POST['prenom'].",".$_POST['email'].",".$_POST['ville'].",".$_POST['pays'].",".$_POST['message'].",".date("d/m/y h:s"). PHP_EOL);
    fclose($op);

header("Location: forum.php");
}
?>
</body>
</html>