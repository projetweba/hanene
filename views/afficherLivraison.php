<?PHP
include "../core/livraisonC.php";
$livraison1C=new LivraisonC();
$listeLivraison=$livraison1C->afficherLivraisons();

//var_dump($listeLivreurs->fetchAll());
?>
<table border="1">
<tr>
<td>ID livraison</td>
<td>ID Livreur</td>
<td>ID Commande</td>
<td>Adresse</td>
<td>Ville</td>
<td>Code postal</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeLivraison as $row){
	?>
	<tr>
	<td><?PHP echo $row['id_livraison']; ?></td>
	<td><?PHP echo $row['id_livreur']; ?></td>
	<td><?PHP echo $row['id_commande']; ?></td>
	<td><?PHP echo $row['adresse']; ?></td>
	<td><?PHP echo $row['ville']; ?></td>
	<td><?PHP echo $row['code_postal']; ?></td>

	<td><form method="POST" action="supprimerLivraison.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id_livraison']; ?>" name="id_livraison">
	</form>
	</td>

	<td><a href="modifierLivraison.php?id_livraison=<?PHP echo $row['id_livraison']; ?>">Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


