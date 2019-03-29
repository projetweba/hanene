<?PHP
include "../entities/livraison.php";
include "../core/livraisonC.php";
$livraison=new Livraison(8,10,5,'enkhilet','ariana',2083);
$livraisonC=new LivraisonC();
$livraisonC->afficherLivraison($livraison);

echo "<br>";
echo "Identifiant:".$livraison->getID();
echo "<br>";
echo "Livreur:".$livraison->getLivreur();
echo "<br>";
echo "Commande:".$livraison->getCommande();
echo "<br>";
echo "Adresse:".$livraison->getAdresse();
echo "<br>";
echo "Ville:".$livraison->getVille();
echo "<br>";
echo "Code postal: ".$livraison->getCode();
echo "<br>";

?>