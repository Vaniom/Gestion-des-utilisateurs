<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Inscription sur myRep!</title>
		<style>
			label, input {
				margin-top: 5px;
			}
			body {
				background-color: #2b78e4;
				color: white;
				padding-left: 30px;
				font-family: "segoe print";
			}
			#valid{
				
			}
		</style>
	</head>
	<body>
		<h1>Inscription sur myRep!</h1>
		<h2>Crée GRATUITEMENT des tas de répertoires</h2>

		<form action="inscription.php" method="post">
			<p>
				<label for="mail">Adresse mail : </label><br /><input type="email" name="mail" id="mail" required /><br />
			</p>
			<p>
			    <label for="pseudo">Choisis un pseudo (minimum 3 caractères): </label><br /><input type="text" name="pseudo" id="pseudo" minlength="3" required /><br />
			</p>
			<p>
			    <label for="password">Mot de passe (8 caractères minimum) : </label><br /><input type="password" name="password" id="password" minlength="8" required /><br />
			</p>
			<p>
			    <label for="confirm">Confirme le mot de passe : </label><br /><input type="password" name="confirm" id="confirm" equalTo="#password" required /><br />
			</p>
		    	<input type="submit" value="Valider" id="valid"/>
			</p>
		</form>
		<a href="index.php">Retour à l'accueil</a>
	</body>
	<script src="js/jquery.js"></script>
	<script src="plugins/jquery-validation/dist/jquery.validate.js"></script>
	<script>
		$(function(){
			$('form').validate();
			/*var validator = $( "form" ).validate();
validator.showErrors({
  	"pseudo": " Ce champs est obligatoire, merci de renseigner ton pseudo.", "mail": " Inscris une adresse email valide.", "password": " Le mot de passe doit contenir au moins 8 caractères.", "confirm": " Les mots de passe ne correspondent pas! Veuillez recommencer."
});*/
		});
	</script>
</html>