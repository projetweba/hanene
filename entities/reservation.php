<?PHP
class reservation {
	private $id_reserv;
	private $id_categorie;
  //private $id_souscat;
	private $id_produit;
	private $valider;
	private $product_name;
	private $categorie_name;
  //private $souscategorie_name;
	private $quantite;
	private $comment;

	function __construct($product_name,$categorie_name,$quantite){
		$this->product_name=$product_name;
		$this->categorie_name=$categorie_name;
   	  //$this->souscategorie_name=$souscategorie_name;
		$this->quantite=$quantite;
	}
	
	
	function getProductName(){
		return $this->product_name;
	}
	function getCategorieName(){
		return $this->categorie_name;
	}
	function getQuantite(){
		return $this->quantite;
	}
  /*function getSousCategorieName(){
		return $this->souscategorie_name;
	}*/
	

	function setProductName($product_name){
		$this->product_name=$product_name;
	}
	function setCategorieName($categorie_name){
		$this->categorie_name=$categorie_name;
	}
  /*function setSousCategorieName($souscategorie_name){
		$this->souscategorie_name=$souscategorie_name;
	}*/
	function setQuantite($quantite){
		$this->quantite=$quantite;
	}
	
}

?>