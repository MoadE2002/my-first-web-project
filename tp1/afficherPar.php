<?php 
	if(isset($_POST['submit']))
	{
		
		if(isset($_FILES['cv']) && $_FILES['cv']['error'] == 0)
		{
			
			if($_FILES['cv']['size'] <= 4000000)
			{
				echo "la taile du cv est infrieur à 4M ".$_FILES['cv']['size']." octets <br>";
				$infosFile = pathinfo($_FILES['cv']['name']);
				
				if ($infosFile['extension'] == "pdf") 
				{
					if(move_uploaded_file($_FILES['cv']['tmp_name'],"E:\Upload".date("Y-m-d").".".$infosFile['extension']))
					{
						echo "Le cv est deplacé avec succes.<br>";
						echo "Le nom du fichier envoyé est (son nom dans le systeme d'exploitation): ".$_FILES['cv']['name'];
					}
					else
						echo "erreur d'enregistrement du cv.<br>";
				}
				else
				{
					echo "l'extension ".$infosFile['extension']." n'est pas autorisee. <br>";
				}

			}
			else
			{
				echo "<script type='text/javascript'>alert('la taille du fichier est superieur a 4M')</script>";
			}
		}
	
		echo "<table border='1'>";
		echo "<tr>";
		echo "<th>Nom du parametre</th>";
		echo "<th>Valeur</th>";
		echo "</tr>";
		foreach ($_POST as $key => $value) 
		{
			if(is_array($value))
			{
				echo "<tr>";
				echo "<td>".$key."</td>";
				echo "<td>";
					foreach ($value as $val) 
				  	echo $val." ";
				echo "</td>";
				echo "</tr>";
			}
			else
			{
				echo "<tr>";
				echo "<td>".$key."</td>";
				echo "<td>".$value."</td>";
				echo "</tr>";
			}
		}
		echo "</table>";
		echo "<a href='formulaire.php'>Retourner vers le formulaire</a>";
	}
 ?>
 <style>
	body {
		font-family: Arial, sans-serif;
		background-color: #f5f5f5;
		padding: 20px;
	}

	h2 {
		text-align: center;
		margin-bottom: 20px;
	}

	table {
		width: 100%;
		border-collapse: collapse;
		margin-bottom: 20px;
	}

	th, td {
		padding: 10px;
		border: 1px solid #ccc;
	}

	a {
		display: block;
		text-align: center;
		margin-top: 20px;
		text-decoration: none;
		color: #333;
		font-weight: bold;
	}

	a:hover {
		text-decoration: underline;
	}
</style>