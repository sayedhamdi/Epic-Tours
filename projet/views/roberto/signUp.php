<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>Tours &amp; Resort HTML Template</title>
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
                        <h2 class="page-title">Sign Up</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Sign Up</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form Area Start -->
    <div class="roberto-contact-form-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h3>Sign Up</h3>
                        <h6><?php if (isset($_GET["msg"])) echo $_GET["msg"]; ?></h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Form -->
                    <div class="roberto-contact-form">
                        <form action="signUpVerification.php" method="post">
                            <div class="row">
                              <div class="col-12 wow fadeInUp" data-wow-delay="100ms">
                                  <input type="number" name="cinClient" class="form-control mb-30" placeholder="Your Cin"></textarea>
                              </div>
                                <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                                    <input type="text" name="nomClient" class="form-control mb-30" placeholder="Your FirstName">
                                </div>
                                <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                                    <input type="text" name="prenomClient" class="form-control mb-30" placeholder="Your LastName">
                                </div>
                                <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                                    <input type="text" name="adresseClient" class="form-control mb-30" placeholder="Your Adress">
                                </div>
                                <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                                    <input type="text" name="telephonneClient" class="form-control mb-30" placeholder="Your phone">
                                </div>
                                <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                                    <input type="password" name="passwordClient" class="form-control mb-30" placeholder="Your password">
                                </div>
                                <div class="col-12 wow fadeInUp" data-wow-delay="100ms">
                                    Male<input type="radio" value="male" name="sexeClient" class="form-control mb-10" >
                                    Female<input type="radio" value="female" name="sexeClient" class="form-control mb-10">
                                </div>

                                <div class="col-12 text-center wow fadeInUp" data-wow-delay="100ms">
                                    <button type="submit" class="btn roberto-btn mt-15">Sign Up</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form Area End -->
<?php include("footer.html"); ?>
