<?php
session_start();
$total = 0;
$total += $_SESSION['panier']['SAMSUNG_GALAXY_S23_ULTRA'] * 10000;
$total += $_SESSION['panier']['HUAWEI_P30'] * 7000;
$total += $_SESSION['panier']['Apple_iPhone_14'] * 9990;
$total += $_SESSION['panier']['GOOGLE_PIXEL_6'] * 8500;
$total += $_SESSION['panier']['ONEPLUS_9_PRO'] * 9200;
$total += $_SESSION['panier']['XIAOMI_MI_11'] * 7800;
$total += $_SESSION['panier']['OPPO_FIND_X3_PRO'] * 8900;
$total += $_SESSION['panier']['SONY_XPERIA_1_III'] * 9500;
$total += $_SESSION['panier']['LG_VELVET'] * 6500;
$total += $_SESSION['panier']['NOKIA_8_3'] * 5700;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Total</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      background-color: #a4508b;
background-image: linear-gradient(326deg, #a4508b 0%, #5f0a87 74%);

    }
    
    .total {
      max-width: 400px;
      margin: 0 auto;
      background-color: #faa499;
background-image: linear-gradient(319deg, #faa499 0%, #f7dd85 37%, #ffc55c 100%);
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 30px;
      text-align: center;
    }
    
    p {
      margin: 20px 0px;
      color: black;
    }
  
    .pic{
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .total a{
  display: inline-block;
  padding: 10px 20px;
  background-color: #da0a0a;
  border: none;
  border-radius: 20px;
  text-decoration: none;
  color: #fff7f7;
  font-weight: bold;
}
.total a:hover{
  background-color: #099564;
}

  </style>
</head>
<body>
  <div class="pic">
    <p><img src="juicy-hands-with-gadgets.png" alt=""></p>
  </div>
  <div class="total">
    <p>Le total de votre panier est <?php echo $total; ?> DH.</p>
    <p><a href=""> Confirmer la Commande </a></p>
    <p><a href="ajout_article.php"> Modifier mon panier</a></p>
    <p><a href="initialisation.php"> Vider mon panier</a></p>
    
    <p><a href="logout.php"> Deconnexion </a></p>
  </div>

  
</body>
</html>