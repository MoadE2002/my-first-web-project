<?php
session_start();

// Générer un nombre aléatoire pour le captcha
$captcha = mt_rand(100000, 999999);

// Stocker la valeur du captcha dans la variable de session
$_SESSION['captcha'] = $captcha;

// Créer une image de captcha
$image = imagecreate(130, 50);
$background = imagecolorallocate($image, 255, 255, 255);
$textColor = imagecolorallocate($image, 0, 0, 0);
imagestring($image, 5, 35, 18, $captcha, $textColor);

// Afficher l'image du captcha
header('Content-type: image/png');
imagepng($image);
imagedestroy($image);
?>
