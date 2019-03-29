<?PHP
include "../core/livraisonC.php";
$livraisonC=new LivraisonC();

if (isset($_POST["id_livraison"]))
{
	$livraisonC->supprimerLivraison($_POST["id_livraison"]);
	header('Location: afficherLivraison.php');
}
else 
{
	echo "erreur";
}

?>