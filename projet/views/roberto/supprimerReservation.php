<?php
  include "../config.php";
  $idReservation = $_GET["idReservation"];
  $cinClient=$_SESSION["cin"];
  $sql="DELETE FROM `reservation` WHERE idReservation=$idReservation";
  $sql1="DELETE FROM `personne` WHERE idReservation=$idReservation";
  $db = config::getConnexion();
  try{
  $db->query($sql);
  $db->query($sql1);
  }catch (Exception $e){
  }
  header("location:reservation.php");
?>
