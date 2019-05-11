<?PHP
class Reservation{

	private $cinClient;
	private $dureeReservation;
	private $idCircuit;
	private $nbrePersonne;
	function __construct($cinClient,$dureeReservation,$idCircuit,$nbrePersonne){
		$this->cinClient=$cinClient;
		$this->dureeReservation=$dureeReservation;
		$this->idCircuit=$idCircuit;
		$this->nbrePersonne=$nbrePersonne;
	}

	function getCinClient(){
		return $this->CinClient;
	}
	function getDureeReservation(){
		return $this->dureeReservation;
	}
	function getIdCircuit(){
		return $this->idCircuit;
	}
	function getNbrePersonne(){
		return $this->nbrePersonne;
	}

	function setCinClient($cinClient){
	 	$this->cinClient=$cinClient;
	}
	function setDureeReservation($dureeReservation){
		 	$this->dureeReservation=$dureeReservation;
	}
	function setIdCircuit($idCircuit){
	 $this->idCircuit=$idCircuit;
	}
	function setNbrePersonne($nbrePersonne){
		 $this->nbrePersonne=$nbrePersonne;
	}
}

?>
