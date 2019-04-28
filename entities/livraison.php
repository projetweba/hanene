<?PHP
class Livraison {
	private $id_livraison;
	private $id_livreur;
	private $adresse;
	private $ville;
	private $code_postal;
	private $date_livraison;
	private $etat;

	function __construct($id_livraison,$id_livreur,$adresse,$ville,$code_postal,$date_livraison,$etat)
	{
		$this->id_livraison=$id_livraison;
		$this->id_livreur=$id_livreur;
		$this->ville=$ville;
		$this->adresse=$adresse;
		$this->code_postal=$code_postal;
		$this->date_livraison=$date_livraison;
		$this->etat=$etat;

	}
	
	function getID(){
		return $this->id_livraison;
	}
	function getLivreur(){
		return $this->id_livreur;
	}
	function getAdresse(){
		return $this->adresse;
	}
	function getVille(){
		return $this->ville;
	}
	function getCode(){
		return $this->code_postal;
	}
	function getDate(){
		return $this->date_livraison;
	}
	function getEtat(){
		return $this->etat;
	}

	function setLivreur($id_livreur){
		$this->id_livreur=$id_livreur;
	}
	function setAdresse($adresse){
		$this->adresse;
	}
	function setVille($ville){
		$this->ville=$ville;
	}
	function setCode($code_postal){
	    $this->code_postal=$code_postal;
	}
	function setDate($date_livraison){
	    $this->date_livraison=$date_livraison;
	}
	function setEtat($etat){
	    $this->etat=$etat;
	}
	
}
?>