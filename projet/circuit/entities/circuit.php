<?PHP
class Circuit{
	private $themeCircuit;
	private $descriptionCircuit;
	private $dureeCircuit;
	private $transportCircuit;
	function __construct($themeC,$descriptionC,$dureeC,$transportC){
		$this->themeCircuit=$themeC;
		$this->descriptionCircuit=$descriptionC;
		$this->dureeCircuit=$dureeC;
		$this->transportCircuit=$transportC;
	}

	function getNumCircuit(){
		return $this->numCircuit;
	}
	function getThemeCircuit(){
		return $this->themeCircuit;
	}
	function getDescriptionCircuit(){
		return $this->descriptionCircuit;
	}
	function getDureeCircuit(){
		return $this->dureeCircuit;
	}
	function getTransportCircuit(){
		return $this->transportCircuit;
	}

	function setNumCircuit($numCircuit){
		 $this->numCircuit=$numCircuit;
	}
	function setThemeCircuit($themeCircuit){
		 $this->themeCircuit=$themeCircuit;
	}
	function setDescriptionCircuit($descriptionCircuit){
		 $this->DescriptionCircuit=$descriptionCircuit;
	}
	function setDureeCircuit($dureeCircuit){
		 $this->dureeCircuit=$dureeCircuit;
	}
	function setTransportCircuit($transportCircuit){
		 $this->transportCircuit=$transportCircuit;
	}
}

?>
