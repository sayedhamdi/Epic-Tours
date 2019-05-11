<?php
  include "../config.php";
  if(isset($_POST["cinClient"]) and isset($_POST["nomClient"]) and isset($_POST["prenomClient"]) and isset($_POST["adresseClient"]) and isset($_POST["telephonneClient"]) and isset($_POST["sexeClient"]) and isset($_POST["passwordClient"])){
    $cinClient=$_POST["cinClient"];$nomClient=$_POST["nomClient"];$prenomClient=$_POST["prenomClient"];
    $adresseClient=$_POST["adresseClient"];$telephonneClient=$_POST["telephonneClient"];$sexeClient=$_POST["sexeClient"];
    $passwordClient=$_POST["passwordClient"];
  $sql="insert into client (cinClient,nomClient,prenomClient,adresseClient,telephonneClient,sexeClient,passwordClient) values (:cinClient,:nomClient,:prenomClient,:adresseClient,:telephonneClient,:sexeClient,:passwordClient)";
  $db = config::getConnexion();
  try{
      $req=$db->prepare($sql);
  $req->bindValue(':cinClient',$cinClient);
  $req->bindValue(':nomClient',$nomClient);
  $req->bindValue(':prenomClient',$prenomClient);
  $req->bindValue(':adresseClient',$adresseClient);
  $req->bindValue(':telephonneClient',$telephonneClient);
  $req->bindValue(':sexeClient',$sexeClient);
  $req->bindValue(':passwordClient',$passwordClient);
          $req->execute();
          $msg="You have Created an account Sign in";
          header('location:signUp.php?msg='.$msg);
          return;
      }
      catch (Exception $e){
            $msg = "Utilisateur Deja existant";
            header('location:signUp.php?msg='.$msg);
            return;

      }
    }
    $msg = "Verifier les Champs";
    header('location:signUp.php?msg='.$msg);

?>
