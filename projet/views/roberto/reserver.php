<?php
include "../config.php";
session_start();
  if(isset($_POST["dureeReservation"]) and isset($_POST["idCircuit"]) and  isset($_POST["nbrePersonne"]))
  {
    $sql="insert into reservation (cinClient,dureeReservation,idCircuit,nbrePersonne) values (:cinClient,:dureeReservation,:idCircuit,:nbrePersonne)";
    $dureeReservation=$_POST["dureeReservation"];
    $idCircuit=$_POST["idCircuit"];$nbrePersonne=$_POST["nbrePersonne"];
    $db = config::getConnexion();
    try{
    $req=$db->prepare($sql);
    $req->bindValue(':cinClient',$_SESSION["cin"]);
    $req->bindValue(':dureeReservation',$dureeReservation);
    $req->bindValue(':idCircuit',$idCircuit);
    $req->bindValue(':nbrePersonne',$nbrePersonne);
            $req->execute();
            $idReservation = $db->lastInsertId();
            echo $idReservation;
        }catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
  }

  if (isset($_POST["nomP1"]) and isset($_POST["prenomP1"]) and isset($_POST["age1"]) ){
      $nomP1=$_POST["nomP1"];$prenomP1=$_POST["prenomP1"];$age1=$_POST["age1"];
      $sql="insert into personne (nomPersonne	,prenomPersonne	,agePersonne	,idReservation) values (:nomPersonne	,:prenomPersonne,	:agePersonne	,:idReservation)";
      $db = config::getConnexion();
      try{
          $req=$db->prepare($sql);
      $req->bindValue(':nomPersonne',$nomP1);
      $req->bindValue(':prenomPersonne',$prenomP1);
      $req->bindValue(':agePersonne',$age1);
      $req->bindValue(':idReservation',$idReservation);
              $req->execute();
          }catch (Exception $e){
              die('Erreur: '.$e->getMessage());
          }
  }
  if (isset($_POST["nomP2"]) and isset($_POST["prenomP2"]) and isset($_POST["age2"]) ){
    $nomP1=$_POST["nomP2"];$prenomP1=$_POST["prenomP2"];$age1=$_POST["age2"];
    $sql="insert into personne (nomPersonne	,prenomPersonne	,agePersonne	,idReservation) values (:nomPersonne	,:prenomPersonne,	:agePersonne	,:idReservation)";
    $db = config::getConnexion();
    try{
        $req=$db->prepare($sql);
        $req->bindValue(':nomPersonne',$nomP1);
        $req->bindValue(':prenomPersonne',$prenomP1);
        $req->bindValue(':agePersonne',$age1);
        $req->bindValue(':idReservation',$idReservation);
            $req->execute();
        }catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
  }
  if (isset($_POST["nomP3"]) and isset($_POST["prenomP3"]) and isset($_POST["age3"]) ){
    $nomP1=$_POST["nomP3"];$prenomP1=$_POST["prenomP3"];$age1=$_POST["age3"];
    $sql="insert into personne (nomPersonne	,prenomPersonne	,agePersonne	,idReservation) values (:nomPersonne	,:prenomPersonne,	:agePersonne	,:idReservation)";
    $db = config::getConnexion();
    try{
        $req=$db->prepare($sql);
        $req->bindValue(':nomPersonne',$nomP1);
        $req->bindValue(':prenomPersonne',$prenomP1);
        $req->bindValue(':agePersonne',$age1);
        $req->bindValue(':idReservation',$idReservation);
            $req->execute();
        }catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
  }
  if (isset($_POST["nomP4"]) and isset($_POST["prenomP4"]) and isset($_POST["age4"]) ){
    $nomP1=$_POST["nomP4"];$prenomP1=$_POST["prenomP4"];$age1=$_POST["age4"];
    $sql="insert into personne (nomPersonne	,prenomPersonne	,agePersonne	,idReservation) values (:nomPersonne	,:prenomPersonne,	:agePersonne	,:idReservation)";
    $db = config::getConnexion();
    try{
        $req=$db->prepare($sql);
        $req->bindValue(':nomPersonne',$nomP1);
        $req->bindValue(':prenomPersonne',$prenomP1);
        $req->bindValue(':agePersonne',$age1);
        $req->bindValue(':idReservation',$idReservation);
            $req->execute();
        }catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
  }
  if (isset($_POST["nomP5"]) and isset($_POST["prenomP5"]) and isset($_POST["age5"]) ){
    $nomP1=$_POST["nomP5"];$prenomP1=$_POST["prenomP5"];$age1=$_POST["age5"];
    $sql="insert into personne (nomPersonne	,prenomPersonne	,agePersonne	,idReservation) values (:nomPersonne	,:prenomPersonne,	:agePersonne	,:idReservation)";
    $db = config::getConnexion();
    try{
        $req=$db->prepare($sql);
        $req->bindValue(':nomPersonne',$nomP1);
        $req->bindValue(':prenomPersonne',$prenomP1);
        $req->bindValue(':agePersonne',$age1);
        $req->bindValue(':idReservation',$idReservation);
            $req->execute();
        }catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
  }


?>
