<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>Reservation</title>
    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.png">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->
    <?php include ("header.php"); ?>
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/16.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Your Tours</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Reservation</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id Reservation</th>
      <th scope="col">nombre de Personne</th>
      <th scope="col">Duree Reservation</th>
      <th scope="col">Circuit </th>
      <th scope="col">supprimer</th>
    </tr>
  </thead>
    <tbody>
    <?php
    include "../config.php";
      $cinClient=$_SESSION["cin"];
      $sql="SELECT * FROM reservation WHERE cinClient= $cinClient";
      $db = config::getConnexion();
      try{
          $liste=$db->query($sql);
          while($row = $liste->fetch()){
            echo "<tr>";
            echo "<td scope='col'>".$row["idReservation"]."</td>";
            echo "<td scope='col'>".$row["nbrePersonne"]."</td>";
            echo "<td scope='col'>".$row["dureeReservation"]."</td>";
            echo "<td scope='col'>".$row["idCircuit"]."</td>";
            echo "<td scope='col'><a href=supprimerReservation.php?idReservation=".$row["idReservation"].">supprimer</a></td>";
            echo "</tr>";
          }
        }

      catch (Exception $e){
      }
    ?>
  </tbody>
</table>
</div>
    <!-- Contact Form Area Start -->
    <div class="roberto-contact-form-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h3>Ajouter Reservation</h3>
                        <h6><?php if (isset($_GET["msg"])) echo $_GET["msg"]; ?></h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Form -->
                    <div class="roberto-contact-form">
                        <form action="reserver.php" method="post">
                            <div class="row">
                              <div class="col-12 wow fadeInUp" data-wow-delay="100ms">
                                  <input type="text" name="dureeReservation" class="form-control mb-30" placeholder="DureeReservation">
                              </div>
                              <div class="col-12 wow fadeInUp" data-wow-delay="100ms">
                                <select name="idCircuit">
                                  <?php
                                    $sql="SELECT * FROM circuit ";
                                    $db = config::getConnexion();
                                    try{
                                        $liste=$db->query($sql);
                                        while($row = $liste->fetch()){
                                          echo"<option value=".$row["numCircuit"].">".$row["themeCircuit"]."</option>";
                                        }
                                      }
                                    catch (Exception $e){
                                    }
                                  ?>
                                </select>
                              </div>
                              Nombre De personne
                              <div class="col-12 wow fadeInUp" data-wow-delay="100ms">

                                  <select id ="nb" name="nbrePersonne">
                                    <option value=2>2</option>
                                    <option value=3>3</option>
                                    <option value=4>4</option>
                                    <option value=5>5</option>
                                  </select>
                                </div>
                              <div class="col-12 wow fadeInUp" data-wow-delay="100ms" id="add">
                              </div>
                                <div class="col-12 text-center wow fadeInUp" data-wow-delay="100ms">
                                    <button type="submit" class="btn roberto-btn mt-15">Reserver</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
      let form1 = `Personne 1
      <div class="col-12 wow fadeInUp" data-wow-delay="100ms">
                    <input type="text" name="nomP1" class="form-control mb-30" placeholder="nom personne 1">
                  </div>
                  <div class="col-12 wow fadeInUp" data-wow-delay="100ms">
                      <input type="text" name="prenomP1" class="form-control mb-30" placeholder="prenom personne 1">
                  </div>
                  <div class="col-12 wow fadeInUp" data-wow-delay="100ms">
                      <input type="number" name="age1" class="form-control mb-30" placeholder="age personne 1">
                  </div>`;
      let form2 = `Personne 2<div class="col-12 wow fadeInUp" data-wow-delay="100ms">
                  <input type="text" name="nomP2" class="form-control mb-30" placeholder="nom personne 2">
                  </div>
                  <div class="col-12 wow fadeInUp" data-wow-delay="100ms">
                <input type="text" name="prenomP2" class="form-control mb-30" placeholder="prenom personne 2">
                    </div>
        <div class="col-12 wow fadeInUp" data-wow-delay="100ms">
                  <input type="number" name="age2" class="form-control mb-30" placeholder="age personne 2">
                </div>`;
    let form3 = `Personne 3<div class="col-12 wow fadeInUp" data-wow-delay="100ms">
                <input type="text" name="nomP3"  class="form-control mb-30" placeholder="nom personne 3">
                  </div>
            <div class="col-12 wow fadeInUp" data-wow-delay="100ms">
                <input type="text" name="prenomP3" class="form-control mb-30" placeholder="prenom personne 3">
            </div>
              <div class="col-12 wow fadeInUp" data-wow-delay="100ms">
              <input type="number" name="age3" class="form-control mb-30" placeholder="age personne 3">
              </div>`;
      let form4 = `Personne 4<div class="col-12 wow fadeInUp" data-wow-delay="100ms">
                <input type="text" name="nomP4"  class="form-control mb-30" placeholder="nom personne 4">
                </div>
                <div class="col-12 wow fadeInUp" data-wow-delay="100ms">
                <input type="text" name="prenomP4" class="form-control mb-30" placeholder="prenom personne 4">
                  </div>
                  <div class="col-12 wow fadeInUp" data-wow-delay="100ms">
                  <input type="number" name="age4" class="form-control mb-30" placeholder="age personne 4">
                  </div>`;
    let form5 = `Personne 5<div class="col-12 wow fadeInUp" data-wow-delay="100ms">
          <input type="text" name="nomP5" class="form-control mb-30" placeholder="nom personne 5">
              </div>
              <div class="col-12 wow fadeInUp" data-wow-delay="100ms">
              <input type="text" name="prenomP5" class="form-control mb-30" placeholder="prenom personne 5">
              </div>
            <div class="col-12 wow fadeInUp" data-wow-delay="100ms">
              <input type="number" name="age5" class="form-control mb-30" placeholder="age personne 5">
        </div>`;

      document.getElementById("nb").onchange = ()=>{
        var nb = document.getElementById("nb").value;
        if (nb == 2 ){
          document.getElementById("add").innerHTML=form1+form2;
        }else if(nb==3){
          document.getElementById("add").innerHTML=form1+form2+form3;
        }else if (nb==4){
          document.getElementById("add").innerHTML=form1+form2+form3+form4;
        }else  {
          document.getElementById("add").innerHTML=form1+form2+form3+form4+form5;
        }
      }
    </script>
    <!-- Contact Form Area End -->
<?php include("footer.html"); ?>
