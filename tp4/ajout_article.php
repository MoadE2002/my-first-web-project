<?php
session_start();

if(isset($_GET['ajout'])){
   switch ($_GET['ajout']) {
      case 'SAMSUNG_GALAXY_S23_ULTRA':
         $_SESSION['panier']['SAMSUNG_GALAXY_S23_ULTRA']++;
         break;

      case 'HUAWEI_P30':
         $_SESSION['panier']['HUAWEI_P30']++;
         break;

      case 'Apple_iPhone_14':
         $_SESSION['panier']['Apple_iPhone_14']++;
         break;

      case 'GOOGLE_PIXEL_6':
         $_SESSION['panier']['GOOGLE_PIXEL_6']++;
         break;

      case 'ONEPLUS_9_PRO':
         $_SESSION['panier']['ONEPLUS_9_PRO']++;
         break;

      // Additional phones
      case 'XIAOMI_MI_11':
         $_SESSION['panier']['XIAOMI_MI_11']++;
         break;

      case 'OPPO_FIND_X3_PRO':
         $_SESSION['panier']['OPPO_FIND_X3_PRO']++;
         break;

      case 'SONY_XPERIA_1_III':
         $_SESSION['panier']['SONY_XPERIA_1_III']++;
         break;

      case 'LG_VELVET':
         $_SESSION['panier']['LG_VELVET']++;
         break;

      case 'NOKIA_8_3':
         $_SESSION['panier']['NOKIA_8_3']++;
         break;
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="s.css">
   <title>Mon magasin de Smartphones</title>
   <style>
   * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
  background-image: url("hugo-agut-tugal-6cdIdu8KkLg-unsplash.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}

    .form {
      margin-top: 30vh;
      background-color: #f1f1f1d6;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px 20px;
      border-radius: 6px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
      width: 50%;
      margin-left: 25%;
    }

    .product-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .product-card {
      width: 200px;
      padding: 10px;
      margin: 10px;
      background-color: #fff;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
      border-radius: 6px;
      text-align: center;
    }

    .product-card a {
      text-decoration: none;
      color: #333;
    }

    .product-card img {
      width: 100%;
      height: auto;
      border-radius: 6px;
    }

    .product-card p {
      margin-top: 10px;
    }

    .product-card p,
    .product-card span {
      font-size: 14px;
      color: #555;
    }

    .v,
    .q {
      margin-top: 20px;
      text-align: center;
    }

    .v a,
    .q a {
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 10px 20px;
      text-decoration: none;
      font-size: 16px;
      border-radius: 4px;
      cursor: pointer;
      display: inline-block;
      margin-right: 10px;
    }

    .v a:last-child {
      margin-right: 0;
    }
  </style>
</head>
<body>
   <div class="form">
      <div class="product-container">
         <div class="product-card">
            <a href="ajout_article.php?ajout=SAMSUNG_GALAXY_S23_ULTRA">
               <img src="OIP.jpeg" alt="Samsung Galaxy S23 Ultra">
               <p>SAMSUNG GALAXY S23 ULTRA (10000 DH)</p>
            </a>
            <p><?php echo $_SESSION['panier']['SAMSUNG_GALAXY_S23_ULTRA']; ?></p>
         </div>
         <div class="product-card">
            <a href="ajout_article.php?ajout=HUAWEI_P30">
               <img src="huawei.jpg" alt="Huawei P30">
               <p>HUAWEI P30 (7000 DH)</p>
            </a>
            <p><?php echo $_SESSION['panier']['HUAWEI_P30']; ?></p>
         </div>
         <div class="product-card">
            <a href="ajout_article.php?ajout=Apple_iPhone_14">
               <img src="iph.jpeg" alt="Apple iPhone 14">
               <p>Apple iPhone 14 (9990 DH)</p>
            </a>
            <p><?php echo $_SESSION['panier']['Apple_iPhone_14']; ?></p>
         </div>
         <div class="product-card">
            <a href="ajout_article.php?ajout=GOOGLE_PIXEL_6">
               <img src="google_pixel_6.jpg" alt="Google Pixel 6">
               <p>Google Pixel 6 (8500 DH)</p>
            </a>
            <p><?php echo $_SESSION['panier']['GOOGLE_PIXEL_6']; ?></p>
         </div>
         <div class="product-card">
            <a href="ajout_article.php?ajout=ONEPLUS_9_PRO">
               <img src="oneplus_9_pro.jpg" alt="OnePlus 9 Pro">
               <p>OnePlus 9 Pro (9200 DH)</p>
            </a>
            <p><?php echo $_SESSION['panier']['ONEPLUS_9_PRO']; ?></p>
         </div>

         <!-- Additional phones -->
         <div class="product-card">
            <a href="ajout_article.php?ajout=XIAOMI_MI_11">
               <img src="xiaomi_mi_11.jpg" alt="Xiaomi Mi 11">
               <p>Xiaomi Mi 11 (7800 DH)</p>
            </a>
            <p><?php echo $_SESSION['panier']['XIAOMI_MI_11']; ?></p>
         </div>
         <div class="product-card">
            <a href="ajout_article.php?ajout=OPPO_FIND_X3_PRO">
               <img src="oppo_find_x3_pro.jpg" alt="OPPO Find X3 Pro">
               <p>OPPO Find X3 Pro (8900 DH)</p>
            </a>
            <p><?php echo $_SESSION['panier']['OPPO_FIND_X3_PRO']; ?></p>
         </div>
         <div class="product-card">
            <a href="ajout_article.php?ajout=SONY_XPERIA_1_III">
               <img src="sony_xperia_1_iii.jpg" alt="Sony Xperia 1 III">
               <p>Sony Xperia 1 III (9500 DH)</p>
            </a>
            <p><?php echo $_SESSION['panier']['SONY_XPERIA_1_III']; ?></p>
         </div>
         <div class="product-card">
            <a href="ajout_article.php?ajout=LG_VELVET">
               <img src="lg_velvet.jpg" alt="LG Velvet">
               <p>LG Velvet (6500 DH)</p>
            </a>
            <p><?php echo $_SESSION['panier']['LG_VELVET']; ?></p>
         </div>
         <div class="product-card">
            <a href="ajout_article.php?ajout=NOKIA_8_3">
               <img src="nokia_8_3.jpg" alt="Nokia 8.3">
               <p>Nokia 8.3 (5700 DH)</p>
            </a>
            <p><?php echo $_SESSION['panier']['NOKIA_8_3']; ?></p>
         </div>
      </div>
   </div>
   <div class="v">
      <a href="http:/php/tp4/initialisation.php">Vider le panier</a>
      <a href="http:/php/tp4/Calcul_Total.php">Voir votre Total</a>
      <a href="http:/php/tp4/logout.php">Déconnexion</a>
   </div>
   <div class="q">
      <a href="http:/php/tp4/accueil.php">Retour</a>
   </div>
</body>
</html>
