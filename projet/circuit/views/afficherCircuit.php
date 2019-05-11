<?PHP
include "../core/circuitC.php";
$circuit1C=new CircuitC();
$listeCircuits=$circuit1C->afficherCircuits();

//var_dump($listeCircuits->fetchAll());
?>
<table border="1">
<tr>
<td>numCircuit</td>
<td>themeCircuit</td>
<td>descriptionCircuit</td>
<td>dureeCircuit</td>
<td> transportCircuit</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeCircuits as $row){
	?>
	<tr>
	<td><?PHP echo $row['numCircuit']; ?></td>
	<td><?PHP echo $row['themeCircuit']; ?></td>
	<td><?PHP echo $row['descriptionCircuit']; ?></td>
	<td><?PHP echo $row['dureeCircuit']; ?></td>
	<td><?PHP echo $row['transportCircuit']; ?></td>
	<td><form method="POST" action="supprimerCircuit.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['numCircuit']; ?>" name="numCircuit">
	</form>
	</td>
	<td><a href="modifierCircuit.php?numC=<?PHP echo $row['numCircuit']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>
