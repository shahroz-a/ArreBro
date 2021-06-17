<html lang="en">
<!-- HEAD -->
<?php
session_start();
include('head.php');
?>


<body>
    <!-- HEADER -->
    <?php
    include('header.php');

    ?>
    <script>
        var a = document.querySelector("#home");
        a.classList.add("active");
    </script>


    <!-- CAROUSEL -->

    <?php
    include('carousel.php');
    ?>


    <!-- Aesthetic -->

    <div class="col-12 writeup">
        <h3 class="mb-3">Trend with Aesthetics.</h3>
        <p>We provide a unique combination of aestheticism and trend. Choose from our wide collection of aesthetic &
            stylish apparels.</p>
    </div>


    <!-- Unisex T shirt -->
    <div class="col-12 writeup">
        <h3>UNISEX T-SHIRTS</h3>
    </div>

    <div class="container mb-5">
        <div class="row">
            <div class="col-md-6 mb-4 cat">
                <a href="" class="">
                    <img src="..\used\printed.png" width="100%" alt="">
                    <h3 class=""> Printed T-shirts</h3>
                </a>
            </div>
            <div class="col-md-6 mb-4 cat">
                <a href="" class="">
                    <img src=" ..\used\solid.png" width="100%" alt="">
                    <h3> Solid T-shirts</h3>
                </a>
            </div>
        </div>
    </div>

    <!-- Products -->

    <div class="col-12 writeup">
        <h3>FEATURED PRODUCTS</h3>
    </div>

    <div class="container">
        <div class="row ">
            <?php
            $sql = "SELECT * FROM products limit 8";
            $result = mysqli_query($conn, $sql);
            while ($final = mysqli_fetch_assoc($result)) { ?>
                <div class="col-md-3 col-6 prod">
                    <div class="card" style="width: 100%;">
                        <a href="details.php?id=<?php echo $final['id'] ?>">
                            <img src="<?php echo $final['picture'] ?>" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $final['name'] ?></h4>
                            <p class="card-text">From Rs.<?php echo $final['price'] ?> <small class="text-decoration-line-through" style="color: black;">Rs. <?php echo ($final['price'] + 500) ?></small></p>
                            <?php if (isset($_SESSION['cart']) && in_array($final['id'], $_SESSION['cart'])){
                                  ?>
                                    <button type="button" onclick="location.href='carthandler.php?id=<?php echo $final['id'] . '&mode=add'?>'" class="btn btn-success disabled">Added To Cart</button>
                                <?php } else {  ?>
                                    <button type="button" onclick="location.href='carthandler.php?id=<?php echo $final['id']. '&mode=add' ?>'" class=" btn btn-outline-danger">Add To Cart</button>
                            <?php } ?>
                            <span class="badge bg-secondary">Sale</span>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <!-- FEATURED COLLECTION -->

    <div class="col-12 writeup">
        <h3>FEATURED COLLECTION</h3>
    </div>

    <div class="container mb-5">
        <div class="row mb-4">
            <div class="col-6 col-md-4 cat">
                <a href="" class="">
                    <img src="../used/minimal.png" width="100%" alt="">
                    <h3 class=""> Minimal</h3>
                </a>
            </div>
            <div class="col-6 col-md-4 cat">
                <a href="" class="">
                    <img src="../used/office.png" width="100%" alt="">
                    <h3 class="">The Office</h3>
                </a>
            </div>
            <div class="col-6 col-md-4 cat">
                <a href="" class="">
                    <img src="../used/valorant.png" width="100%" alt="">
                    <h3 class="">Valorant</h3>
                </a>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <?php
    include('footer.php');
    ?>
</body>
<script src="js\script.js"></script>

</html>