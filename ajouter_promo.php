<?PHP
include "../entities/promo.php";
include "../core/promoC.php";

if (isset($_POST['id_promo']) and isset($_POST['nom']) and isset($_POST['prix_ancien']) and isset($_POST['prix_nouv']) and isset($_POST['descrip'])){
$promo1=new promo($_POST['id_promo'],$_POST['nom'],$_POST['prix_ancien'],$_POST['prix_nouv'],$_POST['descrip']);
//Partie2
/*
var_dump($promo1);
}
*/
//Partie3
$promo1C=new promoC();
$promo1C->ajouterpromo($promo1);
header('Location: afficherpromo.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>