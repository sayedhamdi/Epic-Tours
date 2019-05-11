<?PHP
include "../config.php";
require_once("../entities/reservation.php");
class ReservationC {
function afficherReservation ($reservation){
		echo "Nom: ".$reservation->getThemeReservation()."<br>";
		echo "Prénom: ".$reservation->getDescriptionReservation()."<br>";
		echo "tarif heure: ".$reservation->getDureeReservation()."<br>";
		echo "nb heures: ".$reservation->getTransportReservation()."<br>";
	}

	function ajouterReservation($reservation){

		$sql="insert into reservation (cinClient,dureeReservation,idCircuit,nbrePersonne) values (:cinClient,:dureeReservation,:idCircuit,:nbrePersonne)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
				$cinClient=$reservation->getCinClient();
        $dureeReservation=$reservation->getDureeReservation();
        $idCircuit=$reservation->getIdCircuit();
        $nbrePersonne=$reservation->getNbrePersonne();

		$req->bindValue(':cinClient',$cinClient);
		$req->bindValue(':dureeReservation',$dureeReservation);
		$req->bindValue(':idCircuit',$idCircuit);
		$req->bindValue(':nbrePersonne',$nbrePersonne);
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}

	function afficherReservations(){
		//$sql="SElECT * From reservation e inner join formationphp.reservation a on e.cin= a.cin";
		$sql="SElECT * From reservation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function supprimerReservation($numReservation){
		$sql="DELETE FROM reservation where numReservation = :numReservation";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':numReservation',$numReservation);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierReservation($reservation,$idRes){
		$sql="UPDATE reservation SET  cinClient=:cinClient,dureeReservation=:dureeReservation,idCircuit=:idCircuit,nbrePersonne=:nbrePersonne WHERE idReservation=:idReservation";

		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{

        $req=$db->prepare($sql);
				$cinClient=$reservation->getCinClient();
        $dureeReservation=$reservation->getDureeReservation();
        $idCircuit=$reservation->getIdCircuit();
        $nbrePersonne=$reservation->getNbrePersonne();
				$datas = array(':cinn'=>$cinn, ':cin'=>$idRes, ':nom'=>$nom,':prenom'=>$prenom,':nbH'=>$nb,':tarifH'=>$tarif);
		$req->bindValue(':cinn',$cinn);
		$req->bindValue(':cinClient',$cinClient);
		$req->bindValue(':dureeReservation',$dureeReservation);
		$req->bindValue(':idCircuit',$idCircuit);
		$req->bindValue(':nbrePersonne',$nbrePersonne);


            $s=$req->execute();

           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }

	}
	function recupererReservation($numC){
		$sql="SELECT * from reservation where idReservation=$numC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function rechercherListeReservations($tarif){
		$sql="SELECT * from reservation where tarifHoraire=$tarif";
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
