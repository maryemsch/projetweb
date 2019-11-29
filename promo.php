<?PHP
class Promo{
	private $id_promo;
	private $nom;
	private $image;
	private $prix_ancien;
	private $prix_nouv;
	private $descrip;
	function __construct($id_promo,$nom,$image,$prix_ancien,$prix_nouv,$descrip){
		$this->id_promo=$id_promo;
		$this->nom=$nom;
		$this->image=$image;
		$this->prix_ancien=$prix_ancienc;
		$this->prix_nouv=$adress;
		$this->descrip=$descrip;
	}
	
	function getid_promo(){
		return $this->id_promo;
	}
	function getNom(){
		return $this->nom;
	}
	function getimage(){
		return $this->image;
	}
	function getprix_ancien(){
		return $this->prix_ancien;
	}
	function getprix_nouv(){
		return $this->prix_nouv;
	}
	function getdescrip(){
		return $this->descrip;
	}

	function setid_promo($id_promo){
		$this->id_promo=$id_promo;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	function setimage($image){
		$this->image=$image;
	}
	function setprix_ancien($prix_ancien){
		$this->prix_ancien=$prix_ancien;
	}
	function settelephone($telephone){
		$this->telephone=$telephone;
	}
	function setprix_nouv($prix_nouv){
		$this->prix_nouv=$prix_nouv;
	}
	function setdescrip($descrip){
		$this->descrip=$descrip;
	}
	
	//function setNbHeures($nbHeures){
		//$this->nbHeures=$nbHeures;
	//}
	//function setTarifHoraire($tarifHoraire){
		//$this->tarifHoraire=$tarifHoraire;
	//}
	
}

?>