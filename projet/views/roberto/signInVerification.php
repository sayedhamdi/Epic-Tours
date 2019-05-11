<?php
  include "../config.php";
  if(isset($_POST["cinClient"]) and isset($_POST["passwordClient"])){
    $cinClient=$_POST["cinClient"];
    $passwordClient=$_POST["passwordClient"];
    $sql="SElECT * From client where cinClient =".$cinClient." and passwordClient = '".$passwordClient."'";
		$db = config::getConnexion();
		try{
  		$liste=$db->query($sql);
  		if($liste->rowCount()>0){
        $row = $liste->fetch();
        session_start();
        $_SESSION["user"]= $row["nomClient"];
        $_SESSION["cin"] = $row["cinClient"];
        header("location:index.php");
        return;
      }
		}catch (Exception $e){
      $msg="Password or Cin wrong";
      header('location:signIn.php?msg='.$msg);
      return;
    }
  }
  $msg="Password or Cin wrong";
  header('location:signIn.php?msg='.$msg);
?>
