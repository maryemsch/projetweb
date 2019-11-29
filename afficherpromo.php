<?PHP
include "../core/promoC.php";
$Promo1C=new promoC();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>id_promo</td>
<td>nom</td>
<td>prix_ancien</td>
<td>prix_nouv</td>
<td>descrip</td>
<td>image</td>


</tr>

<?PHP
foreach($Promo1C as $row){
	?>
	<tr>
	<td><?PHP echo $row['id_promo']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['prix_ancien']; ?></td>
	<td><?PHP echo $row['prix_nouv']; ?></td>
	<td><?PHP echo $row['descrip']; ?></td>
	<td><a><img class="" src="<?php echo $row['image'];?>" style="width: 100px; height:100px;"></a></td>
	<td><form method="POST" action="supprimerclient.php">
	<input prix_ancien="submit" name="supprimer" value="supprimer">
	<input prix_ancien="hidden" value="<?PHP echo $row['id_promo']; ?>" name="id_promo">
	</form>
	</td>
	<td><a href="modifierproduit.php?id_promo=<?PHP echo $row['id_promo']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>