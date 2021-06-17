<?php
include("../admin/connection.php");
?>
<header>
    <!-- TOPBAR -->


    <a href="covid.php" class="covid-link">
        <div class="alert alert-dark covid m-0 align" role="alert">
            Covid-19 Update
        </div>
    </a>



    <!-- NAVBAR -->


    <nav class="navbar navbar-expand-md navbar-light bg-light px-md-5 px-4">
        <div class="container-fluid">

            <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand d-none d-md-block m-0" href="index.php">
                <img src="../used/Arre Bro Logo (Black).png" alt="" height="25px" width="100px" />
            </a>

            <div class="navbar-collapse collapse " id="navbarSupportedContent">
                <ul class=" navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link  " id="home" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="product.php" id="shop">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="collection.php" id="collection">Collections</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About.php" id="about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php" id="contact">Contact</a>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav icons">
                <li class="nav-item">
                    <a class="icon-link" href="customerlogin.php">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="icon-link" href="cart.php">
                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                    </a>

                </li>
                <li class="nav-item">
                    <a class="icon-link" href="">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>