<?PHP
include "../config.php";
class LivreurC {
function afficherLivreur ($livreur){

		echo "Nom: ".$livreur->getNom()."<br>";
		echo "Adresse: ".$livreur->getAdresse()."<br>";
		echo "Adresse mail: ".$livreur->getMail()."<br>";
		echo "Numero de telephone: ".$livreur->getNum()."<br>";
	}
	
	function ajouterLivreur($livreur){
		$sql="insert into livreur (nom_liv,adresse_liv,tel_liv,mail_liv) values (:nom_liv,:adresse_liv,:tel_liv,:mail_liv)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom_liv=$livreur->getNom();
        $adresse_liv=$livreur->getAdresse();
        $tel_liv=$livreur->getNum();
        $mail_liv=$livreur->getMail();
		$req->bindValue(':nom_liv',$nom_liv);
		$req->bindValue(':adresse_liv',$adresse_liv);
		$req->bindValue(':tel_liv',$tel_liv);
		$req->bindValue(':mail_liv',$mail_liv);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherLivreurs(){
		//$sql="SElECT * From livreur e inner join formationphp.livreur a on e.ID= a.ID";
		$sql="SElECT * From livreur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function supprimerLivreur($nom_liv){
		$sql="DELETE FROM livreur where nom_liv= :nom_liv";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':nom_liv',$nom_liv);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierLivreur($livreur,$nom_liv){
		$sql="UPDATE livreur SET nom_liv=:nom_ini ,adresse_liv=:adresse_liv,tel_liv=:tel_liv,mail_liv=:mail_liv WHERE nom_liv=:nom_liv";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$nom_ini=$livreur->getNom();
        $adresse_liv=$livreur->getAdresse();
        $tel_liv=$livreur->getNum();
        $mail_liv=$livreur->getMail();
		$datas = array(':nom_ini'=>$nom_ini, ':nom_liv'=>$nom_liv,':adresse_liv'=>$adresse_liv,':tel_liv'=>$tel_liv,':mail_liv'=>$mail_liv);
		$req->bindValue(':nom_ini',$nom_ini);
		$req->bindValue(':nom_liv',$nom_liv);
		$req->bindValue(':adresse_liv',$adresse_liv);
		$req->bindValue(':tel_liv',$tel_liv);
		$req->bindValue(':mail_liv',$mail_liv);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	
	function recupererLivreur($nom_liv){
		$sql="SELECT * from livreur where nom_liv=$nom_liv";
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