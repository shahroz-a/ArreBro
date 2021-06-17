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
            $sql = "SELECT * from customers Where username='$email' AND password='$password'";
            $results = $conn->query($sql);
            if($final = $results->fetch_assoc()){
                $_SESSION['email'] = $final['username'];
                $_SESSION['password'] = $final['password'];
                header('location: cart.php');
            }else{
                echo "<script> alert('Credentials are wrong');
                window.location.href='customerlogin.php';
                </script>";
            }
        }
        ?>

        <div class="container">
            <div class="row">
                <div class="col-6 m-auto mt-5 ">
                    <h1 class="text-center fw-bolder">Login</h1>
                    <form action="customerlogin.php" method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="text-center">
                            <button value="submit" name="submit" type="submit" class="col-3  btn btn-dark mt-3">Sign In</button>
                        </div>
                    </form>
                    <div class="text-center">
                        <small>or</small> <br>
                        <a href="customerregister.php">Create Account</a>
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