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
    // if (isset($_POST['submit'])) {
    //     if (empty($_SESSION['email'] and $_SESSION['password'])) {
    //         header('location:customerlogin.php');
    //     } else {
    //     }
    //     // $email = $_POST['email'];
    //     // $password = $_POST['password'];
    //     // $sql = "SELECT * from customers Where username='$email' AND password='$password'";
    //     // $results = $conn->query($sql);
    //     // if ($final = $results->fetch_assoc()) {
    //     //     $_SESSION['email'] = $final['username'];
    //     //     $_SESSION['password'] = $final['password'];
    //     //     header('location: cart.php');
    //     // } else {
    //     //     echo "<script> alert('Credentials are wrong');
    //     //     window.location.href='customerlogin.php';
    //     //     </script>";
    //     // }
    // }
    ?>

    <script>
        var b = document.querySelector('.banner');
        b.style.background = 'url("../used/cart_banner.png")'
    </script>

    <div class="container px-4 px-lg-0">
        <div class="col-12 m-auto my-5 text-center">
            <h1 class="text-center fw-bolder">Your Cart</h1>
            <a href="product.php" class="text-decoration-underline">Continue shopping</a>
        </div>

        <!-- End -->

        <div class="pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 py-5 bg-white rounded shadow-sm mb-5">
                        <!-- Shopping cart table -->
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-0 bg-light">
                                            <div class="p-2 px-3 text-uppercase">Product</div>
                                        </th>
                                        <th scope="col" class="border-0 bg-light">
                                            <div class="py-2 text-uppercase">Price</div>
                                        </th>
                                        <th scope="col" class="border-0 bg-light">
                                            <div class="py-2 text-uppercase">Quantity</div>
                                        </th>
                                        <th scope="col" class="border-0 bg-light">
                                            <div class="py-2 text-uppercase">Remove</div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    if (isset($_SESSION['cart'])) {
                                        $total = 0;
                                        foreach ($_SESSION['cart'] as $prodid) {
                                            $sql = "SELECT * FROM products WHERE id=$prodid";
                                            $result = mysqli_query($conn, $sql);
                                            $final = mysqli_fetch_assoc($result);
                                            $total += $final['price'];
                                    ?>
                                            <tr>
                                                <th scope="row" class="border-0">
                                                    <div class="p-2">
                                                        <div class="d-inline pe-5">
                                                            <img src="<?php echo  $final['picture'] ?>" alt="" width="95px" height="95px" class="img-fluid rounded shadow-sm">
                                                        </div>
                                                        <div class="ml-3 d-inline-block align-middle">
                                                            <h5 class="mb-3"> <strong><a href="details.php?id=<?php echo $prodid ?>" class="text-dark d-inline-block align-middle"><?php echo $final['name'] ?></a></h5></strong>
                                                            <p class="fw-lighter fs-6">Size : S</p>

                                                        </div>

                                                    </div>
                                                </th>
                                                <td class="border-0 align-middle"><strong>Rs. <?php echo $final['price'] ?></strong></td>
                                                <td class="border-0 align-middle"><strong>1</strong></td>
                                                <td class="border-0 align-middle"><a href="carthandler.php?id=<?php echo $final['id'] . "&mode=delete" ?>" class="text-dark"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                    <?php }
                                    } ?>


                                </tbody>
                            </table>
                        </div>
                        <!-- End -->
                    </div>
                </div>

                <div class="row py-5 p-4 bg-white rounded shadow-sm">

                    <div class="col-6">
                        <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Coupon code</div>
                        <div class="p-4">
                            <p class="font-italic mb-4">If you have a coupon code, please enter it in the box below</p>
                            <div class="input-group mb-4 border rounded-pill p-2">
                                <input type="text" placeholder="Apply coupon" aria-describedby="button-addon3" class="form-control border-0">
                                <div class="input-group-append border-0">
                                    <button id="button-addon3" type="button" class="btn btn-dark px-4 rounded-pill"><i class="fa fa-gift mr-2"></i> Apply coupon</button>
                                </div>
                            </div>
                        </div>
                        <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Shipping Details</div>
                        <div class="p-4">
                            <form id="placeorder" action="carthandler.php?mode=placeorder" method="POST">
                                <div class="mb-3">
                                    <input type="text" class="form-control text-muted" id="address" name='address' placeholder="Address">
                                </div>
                                <div class="mb-3 ">
                                    <input type="text" class="form-control text-muted" id="phone" name="phone" placeholder="Phone Number">
                                </div>
                                <div class="mb-3">
                                    <select class="form-select text-muted" id="payment-method" name="payment-method">
                                        <option value="cash">Cash</option>
                                        <option value="paytm">Paytm</option>
                                         <option value="upi">Upi</option>
                                    </select>
                                </div>
                                <input type="hidden" value="<?php echo $total?>" name="total">
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
                        <div class="p-4">
                            <p class="font-italic mb-4">Shipping and additional costs are calculated based on values you have entered.</p>
                            <ul class="list-unstyled mb-4">
                                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong>RS. <?php echo  $total   ?></strong></li>
                                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping and handling</strong><strong>Rs. 50.00</strong></li>
                                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tax</strong><strong>Rs. 0.00</strong></li>
                                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                                    <h5 class="font-weight-bold">Rs. <?php echo ($total + 50) ?></h5>
                                </li>
                            </ul>

                            <button name="submit" id="submit" type="submit" form="placeorder" class="btn btn-dark rounded-pill py-2 btn-block">Procceed to checkout </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <!-- FOOTER -->
    <?php
    include('footer.php');
    ?>
</body>

</html>