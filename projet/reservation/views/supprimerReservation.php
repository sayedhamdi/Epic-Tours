<?PHP
include "../core/circuitC.php";
$circuitC=new circuitC();
if (isset($_POST["numCircuit"])){
	$circuitC->supprimerCircuit($_POST["numCircuit"]);
	header('Location: afficherCircuit.php');
}

?>
