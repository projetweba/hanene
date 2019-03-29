<?PHP
include "../core/LivreurC.php";

$LivreurC=new LivreurC();

if (isset($_POST["nom_liv"]))
{
	$LivreurC->supprimerLivreur($_POST['nom_liv']);
	header('Location: afficherLivreur.php');
}
else 
{
	echo "erreur";
}

?>