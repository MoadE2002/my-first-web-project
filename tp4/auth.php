<!DOCTYPE html>
 <?php 
      require_once 'connexion.php';
      
      $errormsg='';
      if(isset($_POST)) {

        if(!empty($_POST['login']) && !empty($_POST['password'])){
        
          $sql="SELECT * FROM auth where login = '".$_POST['login']."'and password = '".$_POST['password']."'";
        
          $res=mysqli_query($bd,$sql);
          if($res && mysqli_num_rows($res) > 0){
            session_start();
            $_SESSION['login']=$_POST['login'];
            header('Location: http:/php/projetWeb/Welcome.php');
          }
          
    } else {
            $errormsg='Veuillez saisir un login et un mot de passe.';
           }
}
   ?>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Page Title</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
  <script src='main.js'></script>
  <style>
 
   
  </style>
</head>
<body>  
      <?php 
         if(!empty($errormsg))
         echo  " <script type='txt/javascript'>alert($errormsg)</script>";
         ?>
   <div class="form">
   <form action="auth.php" method="post"> 
    <table>
        <tr>
          <th>Login</th><td> <input type="text" name="login">  </td>
        </tr>
        <tr>
          <th>Password</th><td> <input type="password" name="password">  </td>
        </tr>
        <tr>
          <td colspan="2" align="center"> <input id="S" type="submit" name="v" value="Log in">  </td>
        </tr>
        <tr>
          <td colspan="2" align="center"> 
            <a class="r"  href="Inscription.php">S'inscrire</a>  </td>
        </tr> 
        <tr>  <td colspan="2"><a href="http:/php/projetWeb/Welcome0.php">Retour</a></td></tr>
      </table>
     </form>
   
   </div> 


</body>
</html>