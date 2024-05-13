<!DOCTYPE html>
<html>
<head>
	<title>Formulaire</title>
	<meta charset="utf-8">
  <style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f5f5f5;
		}
    .container {
		max-width: 500px;
		margin: 0 auto;
		padding: 20px;
		background-color: #fff;
		border-radius: 5px;
		box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
	}

	h2 {
		text-align: center;
		margin-bottom: 20px;
	}

	form {
		text-align: left;
	}

	table {
		width: 100%;
		border-collapse: collapse;
		margin-bottom: 20px;
	}

	td {
		padding: 10px;
	}

	input[type="text"],
	input[type="password"],
	select {
		width: 100%;
		padding: 8px;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
	}

	input[type="radio"],
	input[type="checkbox"] {
		margin-right: 5px;
	}

	input[type="file"] {
		margin-top: 5px;
	}

	.submit-btn {
		display: inline-block;
		padding: 10px 20px;
		background-color: #4CAF50;
		border: none;
		border-radius: 4px;
		color: #fff;
		font-size: 16px;
		cursor: pointer;
	}

	.reset-btn {
		display: inline-block;
		padding: 10px 20px;
		background-color: #f44336;
		border: none;
		border-radius: 4px;
		color: #fff;
		font-size: 16px;
		cursor: pointer;
		margin-left: 10px;
	}
  .q {
  position: fixed;
  top: 20px;
  left: 5px;
  display: inline-block;
  padding: 10px 17px;
  background-color: yellow;
  border: none;
  border-radius: 20px;
  text-decoration: none;
  color: #fff7f7;
  font-weight: bold;
}

.q a {
  background-color: yellow;
  padding: 10px 17px;
  text-decoration: none;
  color: black;
  font-size: 18px;
}
.q a:hover {
  background-color: black;
  color: #fff7f7;

}
.q:hover{
  background-color: black;
}
</style>
</head>
<body>
	<div align="center">
		<h2>Remplir le formulaire suivant:</h2>
		<form method="POST" action="afficherPar.php" enctype="multipart/form-data">
		<table border="">
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" required/></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" required></td>
			</tr>
			<tr>
				<td>Profession</td>
				<td><input type="text" name="profession"></td>
			</tr>
			<tr>
				<td>Sexe</td>
				<td>
					<input type="radio" name="sexe" value="F">Feminin
					<input type="radio" name="sexe" value="M">Masculin
				</td>
			</tr>
			<tr>
				<td>Langue</td>
				<td>
					<select name="langue[]" multiple>
						<option value="français">Français</option>
						<option value="arabe">Arabe</option>
						<option value="anglais">Anglais</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Loisir</td>
				<td>
					<input type="checkbox" name="loisir[]" value="Sport">Sport 
					<input type="checkbox" name="loisir[]" value="Voyage">Voyage
					<input type="checkbox" name="loisir[]" value="Lecture">Lecture
					<input type="checkbox" name="loisir[]" value="Music">Music
				</td>
			</tr>
			<tr>
				<td>CV (en pdf) : </td>
				<td>
					<input type="file" name="cv">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<center>
						<input type="submit" name="submit" value="Envoyer">
						<input type="reset" name="reset" value="Retablir">
					</center>
				</td>
			</tr>
		</table>
	</form>
	</div>
  <div class="q">
  <a href="http:/php/projetWeb/php.php">Retour</a>
</div>
</body>
</html>