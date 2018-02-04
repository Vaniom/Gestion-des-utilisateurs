<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=projet_repertoire;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
//
//$pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);
$pseudo = ($_POST['pseudo']);
$pass = $_POST['pass'];

// Vérification des identifiants
$req = $bdd->prepare('SELECT * FROM membres WHERE pseudo = :pseudo/* AND pass = :pass*/');
$req->execute(array(
    'pseudo' => $pseudo));

$resultat = $req->fetch();

$hache = $resultat['pass'];


if (password_verify($pass, $hache))
{
    session_start();
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['pseudo'] = $pseudo;
    echo "Bienvenue $pseudo !<br/>Retour à <a href='index.html'>l'accueil</a>";
}
else
{
    echo "Le login ou le mot de passe sont incorrects :(<br/>Retour à <a href='index.html'>l'accueil</a>";
}
?>
