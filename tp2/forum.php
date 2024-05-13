<!DOCTYPE html PUBLIC "-">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-_"/>
    <link rel="stylesheet" href="/projetWeb/styles.css">
    <title>Forum de Discussion</title>
  </head>
  <body>
    <style>
     body {
      background-color: #e0d2b4;
background-image: linear-gradient(315deg, #e0d2b4 0%, #e2ac6b 74%);

    
    }

    h1 {
      text-align: center;
    }

    form {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    table {
      border-collapse: collapse;
      width: 400px;
      margin-top: 20px;
    }

    table td {
      padding: 10px;
      border: 1px solid black;
      font-size: larger;
      font-weight: bolder;
    }

    table tr:nth-child(even) {
      background-color: #ccc;
    }

    input[type="text"],
    input[type="email"],
    textarea {
      width: 80%;
      padding: 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    input[type="file"] {
      margin-top: 5px;
    }

    input[type="submit"] {
      margin-top: 10px;
      background-color: #da0a0a;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
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
          
          <div align="center">
          <h1>Forum de Discussion : </h1>
          <form action="fr.php" method="post"  enctype="multipart/form-data">
          <table border="3" cellspacing="8" cellpadding="3">
            <tr>
              <td>Nom </td> <td><input type="text" name="nom" required></td>
            </tr>
            <tr>
              <td>Prenom </td> <td><input type="text" name="prenom" required></td>
            </tr>
            <tr>
              <td>Email </td> <td><input type="email" name="email" required></td>
            </tr>
            <tr>
              <td>Ville </td> <td><input type="text" name="ville" required></td>
            </tr>
            <tr>
              <td>Pays </td> <td><input type="text" name="pays" required></td>
            </tr>
            <tr>
              <td>Message </td> <td><span><textarea name="message" required></textarea></span></td>
            </tr>
            <tr>
              <td>Joindre un fichier </td> <td><input type="file"></td>
            </tr>
            <tr>
               <td colspan="2" align="center"><input type="submit" name="Envoyer"></td>
            </tr>
          </table>
        </form>
      </div>

      <?php
    if(isset($_FILES['myf']) and $_FILES['myf']['error']==0){
        if($_FILES['myf']['size']<= 2000000){
          $ex=pathinfo($_FILES['myf']['name'],PATHINFO_EXTENSION);
          $ex_aut=array('txt','pdf');
          if(in_array($ex,$ex_aut)){
            $res=move_uploaded_file($_FILES['myf']['tmp_name'],'C:\wamp64\www\up\upload-'.$_FILES['myf']['name']);
            if($res) echo "L'envoi a bien été effectué !<br><pre><hr>";
           }else echo "erreur: extension non autorisé!!";
        }else echo "erreur: la taille du fichier est trop grande !!";
     }
      ?>

<?php
$f = file('data.txt');
for ($i = 0; $i < count($f); $i++) {
  $tb = explode(',', $f[$i]);
  ?>
  <center>
    <table>
      <table>
        <tr>
          <td><b>Nom & Prenom : </b> <?php echo $tb[0] . " " . $tb[1] ?></td>
          <td><b>Ville : </b> <?php echo $tb[3] . " " . $tb[4] ?></td>
        </tr>
        <tr>
          <td colspan="2"><b>Msg : </b> <?php echo "(".$tb[6].")" . "<br>";
            echo $tb[5] . "<br>"; ?>
          </td>
        </tr>
      </table>
    </table>
  </center>
<?php
}
?>

<div class="r">
  <a href="http:/php/projetWeb/php.php">Retour</a>
</div>

  </body>
</html>