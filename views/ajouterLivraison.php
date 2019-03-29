<?PHP
include "../entities/livraison.php";
include "../core/livraisonC.php";

if (isset($_POST['id_livraison']) and (isset($_POST['id_livreur']) and isset($_POST['id_commande']) and isset($_POST['adresse']) and isset($_POST['ville']) and isset($_POST['code_postal']))
{
		//$livraison1=new livraison($_POST['id_livraison'],$_POST['id_livreur'],$_POST['id_commande'],$_POST['adresse'],$_POST['ville'],$_POST['code_postal']);


		//var_dump($livreur1);

$livraison1C=new LivraisonC()
//$livraison1C->ajouterLivraison($livraison1);
header('Location: form-livraison.html');	
}
else
{
	header('Location: form-livraison.html');	

}

?>