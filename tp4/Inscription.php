<!DOCTYPE html>
<html>
<?php 
     session_start();  
     ?>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Page Title</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
  <script src='main.js'></script>
  <style>
    body{
      background-image: url("marvin-meyer-SYTO3xs06fU-unsplash.jpg");
    }
  </style>
</head>
<body>
  
   <div class="form">
  
   <form action="Inscription.php" method="post"> 
    <table>
        <tr>
          <th>Login</th><td> <input type="text" name="login">  </td>
        </tr>
        <tr>
          <tr>
          <th>Email</th><td class="td"> <input type="email" name="email">  </td>
        </tr>
        <tr>
          <th>Password</th><td class="td"> <input type="password" name="password">  </td>
        </tr>
        <tr>
          <th>Recopiez le captcha :</th>
          <td><img src="captcha.php" alt="Captcha"></td>
        </tr> 
        <tr>
          <td colspan="2"><input type="text" id="captcha" name="captcha" required>  </td>
        </tr>
        <tr>
          <td colspan="2" > <input id="s" type="submit" name="v" value="Sign Up">  </td>
        </tr>
        <tr>
          <td colspan="2" > <a href="auth.php">Retour</a>  </td>
        </tr>
    </table>
     </form>
   </div> 

<?php 
   
      require_once 'connexion.php';
     
      if(isset($_POST['v']) ) {
       
       if($_SESSION['captcha']==$_POST['captcha']){  
        extract($_POST);
        $sql="INSERT INTO auth(login,password,email) values ('$login','$password','$email')";
        $res=mysqli_query($bd,$sql);
        if($res){
           $_SESSION["login"] = $login;
          header("location: http:/php/projetWeb/Welcome.php"); 
          echo "<script type=\"txt/javascript\">alert(\"Inscription avec succès ...\")</script>";
        
         
        }
      }
        else
        { header("location: Inscription.php"); 
          echo "<script type=\"txt/javascript\">alert(\"Erreur d'inscription dans le site !\")</script>";
          
        }
        mysqli_close($bd);
    }

   ?>
   </body>
</html>