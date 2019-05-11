<?PHP
include "../config.php";
require_once("../entities/circuit.php");
class CircuitC {
function afficherCircuit ($circuit){
		echo "Nom: ".$circuit->getThemeCircuit()."<br>";
		echo "Prénom: ".$circuit->getDescriptionCircuit()."<br>";
		echo "tarif heure: ".$circuit->getDureeCircuit()."<br>";
		echo "nb heures: ".$circuit->getTransportCircuit()."<br>";
	}

	function ajouterCircuit($circuit){
		$sql="insert into circuit (themeCircuit,dureeCircuit,descriptionCircuit,transportCircuit) values (:themeCircuit,:dureeCircuit,:descriptionCircuit,:transportCircuit)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
				$numCircuit=$circuit->getNumCircuit();
        $themeCircuit=$circuit->getThemeCircuit();
        $descriptionCircuit=$circuit->getDescriptionCircuit();
        $dureeCircuit=$circuit->getDureeCircuit();
        $transportCircuit=$circuit->getTransportCircuit();
		$req->bindValue(':themeCircuit',$themeCircuit);
		$req->bindValue(':descriptionCircuit',$descriptionCircuit);
		$req->bindValue(':dureeCircuit',$dureeCircuit);
		$req->bindValue(':transportCircuit',$transportCircuit);
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}

	function afficherCircuits(){
		//$sql="SElECT * From circuit e inner join formationphp.circuit a on e.cin= a.cin";
		$sql="SElECT * From circuit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function supprimerCircuit($numCircuit){
		$sql="DELETE FROM circuit where numCircuit = :numCircuit";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':numCircuit',$numCircuit);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierCircuit($circuit){
		$sql="UPDATE circuit SET  themeCircuit=:themeCircuit,dureeCircuit=:dureeCircuit,descriptionCircuit=:descriptionCircuit,transportCircuit=:transportCircuit WHERE numCircuit=:numC";

		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{
        $req=$db->prepare($sql);
        $themeCircuit=$circuit->getThemeCircuit();
        $dureeCircuit=$circuit->getDureeCircuit();
        $descriptionCircuit=$circuit->getDescriptionCircuit();
        $transportCircuit=$circuit->getTransportCircuit();
		$datas = array(':cin'=>$cin, ':nom'=>$nom,':prenom'=>$prenom,':nbH'=>$nb,':tarifH'=>$tarif);
		$req->bindValue(':themeCircuit',$themeCircuit);
		$req->bindValue(':dureeCircuit',$dureeCircuit);
		$req->bindValue(':descriptionCircuit',$descriptionCircuit);
		$req->bindValue(':transportCircuit',$transportCircuit);


            $s=$req->execute();

           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }

	}
	function recupererCircuit($numC){
		$sql="SELECT * from circuit where numCircuit=$numC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function rechercherListeCircuits($tarif){
		$sql="SELECT * from circuit where tarifHoraire=$tarif";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>
