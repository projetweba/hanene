<?PHP
class Livreur {
	private $nom_liv;
	private $adresse_liv;
	private $mail_liv;
	private $tel_liv;
	function __construct($nom_liv,$adresse_liv,$tel_liv,$mail_liv){
		$this->nom_liv=$nom_liv;
		$this->adresse_liv=$adresse_liv;
		$this->mail_liv=$mail_liv;
		$this->tel_liv=$tel_liv;
	}
	
	
	function getNom(){
		return $this->nom_liv;
	}
	function getAdresse(){
		return $this->adresse_liv;
	}
	function getNum(){
		return $this->tel_liv;
	}
	function getMail(){
		return $this->mail_liv;
	}
	

	function setNom($nom_liv){
		$this->nom_liv=$nom_liv;
	}
	function setAdresse($adresse_liv){
		$this->adresse_liv;
	}
	function setNum($tel_liv){
		$this->tel_liv=$tel_liv;
	}
	function setMail($mail_liv){
		$this->mail_liv=$mail_liv;
	}	
}

?>