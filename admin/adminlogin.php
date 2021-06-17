<html lang="en">

<?php

session_start();
include('admin-head.php');


if (isset($_POST['submit'])) {
    $email = $_POST['admin-email'];
    $password = $_POST['admin-password'];
    $sql = "SELECT * from admins Where username='$email' AND password='$password'";
    $results = $conn->query($sql);
    if($final = $results->fetch_assoc()){
        $_SESSION['admin-email'] = $final['username'];
        $_SESSION['admin-password'] = $final['password'];
        header('location: adminindex.php');
    }else{
        header('location:adminlogin.php');
    }

}
?>
<body>
    <link rel="stylesheet" href="../css/style.css">
    <div class="container text-white">
        <div class="row">
            <div class="col-4 m-auto mt-3 ">
                <h3>Admin Login</h3>
                <hr>
                <form action="adminlogin.php" method="POST">
                    <div class="mb-3">
                        <label for="admin-email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="admin-email" name="admin-email" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label for="admin-password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="admin-password" name="admin-password" placeholder="Password">
                    </div>
                    <button value="submit" name="submit" type="submit" class="btn btn-success mt-3">Log In</button>
                </form>
            </div>
        </div>
    </div>


</body>

</html>