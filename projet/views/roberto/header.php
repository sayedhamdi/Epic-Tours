<header class="header-area">
    <!-- Search Form -->
    <?php session_start(); ?>

    <!-- Main Header Start -->
    <div class="main-header-area">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="robertoNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.php"><img src="./img/core-img/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li class="active"><a href="./index.php">Home</a></li>
                                <li><a href="./tours.php">Tours</a></li>
                                <li><a href="./reservation.php">Reserver</a></li>
                                <?php

                                      if (isset($_SESSION["user"])){
                                      echo "<li><a href='#'>".$_SESSION["user"]."</a></li>";
                                      echo "<li><a href='logout.php'>Logout</a></li>";}
                                    else{
                                      echo "<li><a href='./signIn.php'>Sign In</a></li>";
                                      echo" <li><a href='./signUp.php'>Sign Up</a></li>";
                                    }
                                  ?>
                            </ul>
                            <!-- Book Now -->
                            
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
