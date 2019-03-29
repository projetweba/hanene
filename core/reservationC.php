<?PHP
include "../config.php";
class reservationC {
function afficherReservation ($reservation){
		
		echo "Categorie name: ".$reservation->getCategorieName()."<br>";
		//echo "Sous Categorie name: ".$reservation->getSousCategorieName()."<br>";
		echo "Product name: ".$reservation->getProductName()."<br>";
		echo "quantite: ".$reservation->getQuantite()."<br>";

	}	
	function ajouterReservation($reservation){
		$sql="insert into reservation(product_name,categorie_name,quantite) values (:product_name,:categorie_name,:quantite)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $categorie_name=$reservation->getCategorieName();
        //$souscategorie_name=$reservation->getSousCategorieName();
        $quantite=$reservation->getQuantite();
        $product_name=$reservation->getProductName();


		$req->bindValue(':product_name',$product_name);
		$req->bindValue(':categorie_name',$categorie_name);
		//$req->bindValue(':souscategorie_name',$souscategorie_name);
		$req->bindValue(':quantite',$quantite);
		
		        $req->execute();           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }
      function afficherReservations(){
		//$sql="SElECT * From reservation e inner join formationphp.reservation a on e.ID= a.ID";
		$sql="SElECT * From reservation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	}
?>