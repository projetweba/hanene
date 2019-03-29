<?PHP
include "../entities/livreur.php";
include "../core/livreurC.php";
$livreur=new Livreur(3,'ali','Ghazela',5042,'ali@gmail.com');
$livreurC=new LivreurC();
$livreurC->afficherLivreur($livreur);

echo "<br>";
echo "Identifiant:".$livreur->getID();
echo "<br>";
echo "nom:".$livreur->getNom();
echo "<br>";
echo "Adresse:".$livreur->getAdresse();
echo "<br>";
echo "Numero de telephone:".$livreur->getNum();
echo "<br>";
echo "mail:".$livreur->getMail();
echo "<br>";

?>