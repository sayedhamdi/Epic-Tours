<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/reservation.php";
include "../core/reservationC.php";
if (isset($_GET['idReservation'])){
	$reservationC=new ReservationC();



    $result=$reservationC->recupererReservation($_GET['idReservation']);
	foreach($result as $row){
		$cinClient=$row['cinClient'];
		$dureeReservation=$row['dureeReservation'];
		$idCircuit=$row['idCircuit'];
		$nbrePersonne=$row['nbrePersonne'];
?>
<form method="POST">
<table>
<caption>Modifier Reservation</caption>
<tr>
<td>themeReservation</td>
<td><input type="text" name="cinClient" value="<?PHP echo $cinClient ?>"></td>
</tr>
<tr>
<td>dureeReservation</td>
<td><input type="text" name="dureeReservation" value="<?PHP echo $dureeReservation ?>"></td>
</tr>
<tr>
<td>descriptionReservation</td>
<td><input type="text" name="idCircuit" value="<?PHP echo $idCircuit ?>"></td>
</tr>
<tr>
<td>transportReservation</td>
<td><input type="text" name="nbrePersonne" value="<?PHP echo $nbrePersonne ?>"></td>
</tr>
<tr>
	<td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['idReservation'];?>"></td>
</tr>
<tr>
	<td><input type="submit" name="modifier" value="modifier"></td>
</tr>

<tr>
<td></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$reservation=new reservation($_POST['cinClient'],$_POST['dureeReservation'],$_POST['idCircuit'],$_POST['nbrePersonne']);
	$reservationC->modifierReservation($reservation,$_POST['id_ini']);
	header('Location: afficherReservation.php');
}
?>
</body>
</HTMl>
