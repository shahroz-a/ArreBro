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
    include('banner.php');
    $name = 'All';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['filter_by'];
    } else if (isset($_GET['id'])) {
        $category_id = $_GET['id'];
        $sql = "SELECT * FROM categories where id= '$category_id'";
        $result = mysqli_query($conn, $sql);
        $final = mysqli_fetch_assoc($result);
        $name = $final['name'];
    }
    ?>
    <script>
        var a = document.querySelector("#shop");
        a.classList.add("active");
        var b = document.querySelector('.banner');
        b.style.background = 'url("../used/product_banner.jpg")'
        var b = document.querySelector('.banner h1');
        b.innerHTML = "Products"
    </script>

    <!-- heading -->
    <div class="col-12 writeup" style="padding-top: 0px;">
        <h3 class="fw-bolder" style="font-size: 2.2em; font-weight: bolder;">Products</h3>
    </div>

    <div class="container">
        <hr class="">

        <!-- filter forms -->
        <div class="row">
            <div class="col-6">
                <div class="filter-form">
                    <form action="product.php" method="POST">
                        <div class="input-group mb-3 select">
                            <label class="input-group-text" for="filter-by">FILTER BY</label>
                            <select class="form-select" id="filter_by" name="filter_by" onchange="this.form.submit();">
                                <option selected value="<?php echo $name ?>"><?php echo $name ?></option>
                                <?php if ($name != 'All') { ?>
                                    <option value="All">All</option>
                                <?php } ?>
                                <?php
                                $sql = "SELECT * from categories";
                                $result = mysqli_query($conn, $sql);
                                while ($final = mysqli_fetch_assoc($result)) {
                                    if ($final['name'] != $name) { ?>
                                        <option value="<?php echo $final['name'] ?>"><?php echo $final['name'] ?></option>
                                <?php }
                                } ?>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-6">
                <div class="sort-form">
                    <form action="#" method="get">
                        <div class="input-group mb-3 select">
                            <label class="input-group-text" for="sort">SORT BY</label>
                            <select class="form-select" id="sort_by">
                                <option value="1">T-Shirt</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <hr class="mb-5 mt-0">
        <!-- products -->
        <div class="row">
            <?php
            if ($name == 'All') {
                $sql = "SELECT * FROM products";
                $result = mysqli_query($conn, $sql);
            } else {
                $sql2 = "SELECT * from categories where name = '$name'";
                $result2 = mysqli_query($conn, $sql2);
                $final2 = mysqli_fetch_assoc($result2);
                $category_id = $final2['id'];
                $sql = "SELECT * FROM products Where category_id = '$category_id'";
                $result = mysqli_query($conn, $sql);
            }
            while ($final = mysqli_fetch_assoc($result)) { ?>
                <div class="col-md-3 col-6 prod">
                    <div class="card" style="width: 100%;">
                        <a href="details.php?id=<?php echo $final['id'] ?>">
                            <img src="<?php echo $final['picture'] ?>" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $final['name'] ?></h4>
                            <p class="card-text">From Rs.<?php echo $final['price'] ?> <small class="text-decoration-line-through" style="color: black;">Rs. <?php echo ($final['price'] + 500) ?></small></p>
                            <?php if (isset($_SESSION['cart']) && in_array($final['id'], $_SESSION['cart'])) {
                            ?>
                                <button type="button" onclick="location.href='carthandler.php?id=<?php echo $final['id'] . '&mode=add' ?>'" class="btn btn-success disabled">Added To Cart</button>
                            <?php } else {  ?>
                                <button type="button" onclick="location.href='carthandler.php?id=<?php echo $final['id'] . '&mode=add' ?>'" class=" btn btn-outline-danger">Add To Cart</button>
                            <?php } ?>
                            <span class="badge bg-secondary">Sale</span>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
    <hr>



    <!-- FOOTER -->
    <?php
    include('footer.php');
    ?>





</body>

</html>