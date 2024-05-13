<?php 
session_start();
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mon magazin de Smartphone</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      background-image: url("bruno-kelzer-LvySG1hvuzI-unsplash.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      height: 100vh;
      overflow: hidden;
    }
   
    
    h1 {
      color: #333;
      margin-top: 50px;
    }
    
    .accueil {
      margin-top: 20px;
      padding: 20px;
      background-color: #333;
      border: 1px solid #ccc;
      border-radius: 4px;
      color: #fff7f7;
      display: inline-block;
    }
    
    .accueil p {
      margin: 10px 0;
    }
    
    .accueil a {
      
      text-decoration: none;
      color: #da0a0a;
      background-color: #ccc;
      padding: 10px 20px;
    }
    
    .accueil a:hover {
      text-decoration: underline;
    }
    
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
   
        <h1>Bienvenu <font color="blue"><?php echo $_SESSION['login']; ?></font> , chez SMI E-Co!!!</h1> <p><img src="business-3d-close-up-of-black-businessman-in-blue-suit-waving-hello.png" alt="Bienvenue"></p>
        <div class="accueil">

          <p>Votre panier est vide </p>
          <p><a href="initialisation.php"> Cliquer ici  </a>  pour le remplir</p>
        </div>
       
 <div class="r">
  <a href="http:/php/projetWeb/php.php">Retour</a>
</div>
</body>
</html>