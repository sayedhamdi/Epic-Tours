<?PHP
require_once("../entities/reservation.php");
include "../core/reservationC.php";

if (isset($_POST['cinClient']) and isset($_POST['dureeReservation']) and isset($_POST['idCircuit']) and isset($_POST['nbrePersonne'])){
$reservation1=new Reservation($_POST['cinClient'],$_POST['dureeReservation'],$_POST['idCircuit'],$_POST['nbrePersonne']);
//Partie2
/*
var_dump($circuit1);
}
*/
//Partie3
$reservation1C=new ReservationC();
$reservation1C->ajouterReservation($reservation1);
header('location:afficherReservation.php');

}else{
	echo "vérifier les champs";
}
//*/

?>
