<?PHP
require_once("../entities/circuit.php");
include "../core/circuitC.php";

if (isset($_POST['tC']) and isset($_POST['dC']) and isset($_POST['timeC']) and isset($_POST['transC'])){
$circuit1=new Circuit($_POST['tC'],$_POST['dC'],$_POST['timeC'],$_POST['transC']);
//Partie2
/*
var_dump($circuit1);
}
*/
//Partie3
$circuit1C=new CircuitC();
$circuit1C->ajouterCircuit($circuit1);
header('location:afficherCircuit.php');

}else{
	echo "vérifier les champs";
}
//*/

?>
