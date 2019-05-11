<?PHP
include "../core/reservationC.php";
$reservation1C=new ReservationC();
$listeReservations=$reservation1C->afficherReservations();

//var_dump($listeReservations->fetchAll());
?>
<table border="1">
<tr>
<td>numReservation</td>
<td>themeReservation</td>
<td>descriptionReservation</td>
<td>dureeReservation</td>
<td>supprimer</td>
<td>modifier</td>
</tr>


<?PHP
foreach($listeReservations as $row){
	?>
	<tr>
	<td><?PHP echo $row['cinClient']; ?></td>
	<td><?PHP echo $row['dureeReservation']; ?></td>
	<td><?PHP echo $row['idReservation']; ?></td>
	<td><?PHP echo $row['nbrePersonne']; ?></td>
	<td><form method="POST" action="supprimerReservation.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['idReservation']; ?>"name="idReservation">
	</form>
	</td>
	<td><a href="modifierReservation.php?idReservation=<?php echo $row['idReservation'];?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>
