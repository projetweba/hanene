<?PHP
include "../config.php";
class LivraisonC {
function afficherLivraison ($livraison){

		echo "Identifiant de la livraison: ".$livraison->getID()."<br>";
		echo "Identifiant du livreur: ".$livraison->getLivreur()."<br>";
		echo "Identifiant de la commande: ".$livraison->getCommande()."<br>";
		echo "Adresse: ".$livraison->getAdresse()."<br>";
		echo "Ville: ".$livraison->getVille()."<br>";
		echo "Code postal: ".$livraison->getCode()."<br>";
	}
	
	function ajouterLivraison($livraison){
		$sql="insert into livraison (id_livraison,id_livreur,id_commande,adresse,ville,code_postal) values(:id_livraison,:id_livreur,:id_commande,:adresse,:ville,:code_postal)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_livraison=$livraison->getID();
        $id_livreur=$livraison->getLivreur();
        $id_commande=$livraison->getCommande();
        $adresse=$livraison->getAdresse();
        $ville=$livraison->getVille();
        $code_postal=$livraison->getCode();

	    $req->bindValue(':id_livraison',$id_livraison);
		$req->bindValue(':id_livreur',$id_livreur);
		$req->bindValue(':id_commande',$id_commande);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':ville',$ville);
		$req->bindValue(':code_postal',$code_postal);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherLivraisons(){
		//$sql="SElECT * From livraison e inner join formationphp.livraison a on e.ID= a.ID";
		$sql="SElECT * From livraison";
		$db = config::getConnexion();
		try{
		$listeLivraison=$db->query($sql);
		return $listeLivraison;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function supprimerLivraison($id_livraison){
		$sql="DELETE FROM livraison where id_livraison= :id_livraison";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_livraison',$id_livraison);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierLivraison($livraison,$id_livraison){
		$sql="UPDATE livraison SET id_livraison=:id_livraison_ini, id_livreur=:id_livreur,id_commande=:idcommande,adresse=:adresse,ville=:ville,code_postal=:code_postal WHERE id_livraison=:id_livraison";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id_livraison_ini=$livraison->getID();
        $id_livreur=$livraison->getLivreur();
        $id_commande=$livraison->getCommande();
        $adresse=$livraison->getAdresse();
        $ville=$livraison->getVille();
        $code_postal=$livraison->getCode();
$datas = array(':id_livraison_ini'=>$id_livraison_ini, ':id_livraison'=>$id_livraison, ':id_livreur'=>$id_livreur,':id_commande'=>$id_commande,':adresse'=>$adresse,':ville'=>$ville,'code_postal'=>$code_postal);
		$req->bindValue(':id_livraison_ini',$id_livraison_ini);
		$req->bindValue(':id_livraison',$id_livraison);
		$req->bindValue(':id_commande',$id_commande);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':ville',$ville);
		$req->bindValue(':code_postal',$code_postal);
		
            $s=$req->execute();
    }
        catch (Exception $e)
        {
            echo " Erreur ! ".$e->getMessage();
   			echo " Les datas : " ;
  			print_r($datas);
        }	
	}

	function recupererLivraison($id_livraison){
		$sql="SELECT * from livraison where id_livraison=$id_livraison";
		$db = config::getConnexion();
		try{
		$listeLivraison=$db->query($sql);
		return $listeLivraison;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>