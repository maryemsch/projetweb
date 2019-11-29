<?PHP
include "../config.php";
class PromoC {
function afficherPromo ($promo){
		echo "id_promo: ".$promo->getid_promo()."<br>";
		echo "nom: ".$promo->getNom()."<br>";
		echo "image: ".$promo->getimage()."<br>";
		echo "prix_ancien: ".$promo->getprix_ancien()."<br>";
		echo "prix_nouv ".$promo->getprix_nouv()."<br>";
		//echo "imageC: ".$promo->getimageC()."<br>";
		echo "descrip: ".$promo->getdescrip()."<br>";
	}
	//function calculerSalaire($promo){
	//	echo $promo->getNbHeures() * $promo->getTarifHoraire();
	
	function ajouterpromo($promo){
		$sql="insert into promo (id_promo,nom,image,prix_ancien,prix_nouv,descrip) values (:id_promo,:nom,:image,:prix_ancien,:prix_nouv,:descrip)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $id_promo=$promo->getid_promo();
        $nomC=$promo->getNom();
        $image=$promo->getimage();
        $prix_ancien=$promo->getprix_ancien();
        $prix_nouv=$promo->getprix_nouv();
        $descrip=$promo->getdescrip();
		$req->bindValue(':id_promo',$id_promo);
		$req->bindValue(':nomC',$nomC);
		$req->bindValue(':image',$image);
		$req->bindValue(':prix_ancien',$prix_ancien);
		$req->bindValue(':prix_nouv',$prix_nouv);
		$req->bindValue(':descrip',$descrip);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherpromos(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.id_promo= a.id_promo";
		$sql="SElECT * From promo";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerpromo($id_promo){
		$sql="DELETE FROM promo where id_promo= :id_promo";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_promo',$id_promo);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierpromo($promo,$id_promo){
		$sql="UPDATE promo SET id_promo=:id_promo, nomC=:nomC,image=:image,telephone=:telephone,prix_ancien=:prix_ancien, prix_nouv=:prix_nouv,descrip=:descrip  WHERE id_promo=:id_promo";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id_promo=$promo->getid_promo();
        $nomC=$promo->getNom();
        $image=$promo->getPrenom();
        $telephone=$promo->gettelephone();
        $prix_ancien=$promo->getprix_ancien();
        $prix_nouv=$promo->getprix_nouv();
        $descrip=$promo->getdescrip();
$datas = array( ':id_promo'=>$id_promo, ':nomC'=>$nom,':image'=>$prenom,':telephone'=>$telephone,':prix_ancien'=>$prix_ancien,':prix_nouv'=>$prix_nouv,':descrip'=>$descrip);
	
		$req->bindValue(':id_promo',$id_promo);
		$req->bindValue(':nomC',$nomC);
		$req->bindValue(':image',$image);
		$req->bindValue(':telephone',$telephone);
		$req->bindValue(':prix_ancien',$prix_ancien);
		$req->bindValue(':prix_nouv',$prix_nouv);
		$req->bindValue(':descrip',$descrip);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererpromo($id_promo){
		$sql="SELECT * from promo where id_promo=$id_promo";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListepromos($prenom){
		$sql="SELECT * from promo where image=$prenom";
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