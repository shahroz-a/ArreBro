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
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "INSERT INTO customers(username, password) VALUES('$email','$password')";
        $conn->query($sql);
        $_SESSION['email'] =  $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
        header('location: cart.php');
    }
    ?>

    <div class="container">
        <div class="row">
            <div class="col-6 m-auto mt-5 ">
                <h1 class="text-center fw-bolder">Create Accounr</h1>
                <form action="customerregister.php" method="POST">
                    <div class="mb-3">
                        <label for="firstname" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstname" name="firstname">
                    </div>
                    <div class="mb-3">
                        <label for="lastname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastname" name="lastname">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="text-center">
                        <button value="submit" name="submit" type="submit" class="col-3  btn btn-dark mt-3">Create Account</button>
                    </div>
                </form>
                <div class="text-center">
                    <small>or</small> <br>
                    <a href="customerlogin.php">Sign In</a>
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