<?php
session_start();
$_SESSION['panier'] = array(
  "SAMSUNG_GALAXY_S23_ULTRA" => 0,
  "HUAWEI_P30" => 0,
  "Apple_iPhone_14" => 0,
  "GOOGLE_PIXEL_6" => 0,
  "ONEPLUS_9_PRO" => 0,
  "XIAOMI_MI_11" => 0,
  "OPPO_FIND_X3_PRO" => 0,
  "SONY_XPERIA_1_III" => 0,
  "LG_VELVET" => 0,
  "NOKIA_8_3" => 0
);
header("Location: ajout_article.php");
?>
