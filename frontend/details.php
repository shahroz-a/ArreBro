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
    <link rel="stylesheet" href="style2.css">

    <div class="container details mt-5" id='details'>
        <div class="row">

            <?php
            $id = $_GET['id'];
            $sql = "SELECT * from products where id='$id'";
            $result = mysqli_query($conn, $sql);
            $final = mysqli_fetch_assoc($result);
            ?>
            <div class="col-6">
                <img src="<?php echo $final['picture'] ?>" alt="" width=100%>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <h1><?php echo $final['name'] ?></h1>
                    <h3>Rs. <?php echo $final['price'] . ".00" ?> <span class="ms-3 text-decoration-line-through" style="color: black;"><?php echo ($final['price'] + 500) . ".00" ?> </span><span class=" ms-3 badge bg-secondary">Sale</span>
                    </h3>
                    <small>Tax included</small>

                </div>
                <p class="mb-5"><?php echo  $final['description'] ?>

                </p>

                <label for="size" class="form-label fs-5">Size</label>
                <select name="size" id="size" class="form-select mb-5 w-50 p-2">
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                </select>
                <button class="btn btn-dark w-100 mb-3 p-2 fw-bolder">SEE SIZE CHART</button>
                <?php if (isset($_SESSION['cart']) && in_array($final['id'], $_SESSION['cart'])){
                                  ?>
                                    <button type="button" onclick="location.href='carthandler.php?id=<?php echo $final['id'] . '&mode=add'?>'" class="btn btn-success w-100 mb-3 p-2 fw-bolder disabled">Added To Cart</button>
                                <?php } else {  ?>
                                    <button type="button" onclick="location.href='carthandler.php?id=<?php echo $final['id']. '&mode=add' ?>'" class=" btn btn-outline-success w-100 mb-3 p-2 fw-bolder">Add To Cart</button>
                            <?php } ?>
                <button class="btn btn-dark w-100 mb-3 p-2 fw-bolder">BUY NOW</button>


                <h2 class="mt-5 mb-4">Check COD Availability</h2>
                <div class="mb-3 row">
                    <div class="col-auto">
                        <input type="text" class="form-control" id="inputPassword" placeholder="Postal Code e.g. 122001">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-dark">Check</button>
                    </div>
                </div>
            </div>
        </div>




        <!-- content -->
        <div class="about container">

        </div>

    </div>
 <!-- FOOTER -->
 <?php
        include('footer.php');
        ?>


</body>

</html>