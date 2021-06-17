<html lang="en">
<?php
include('session.php');

include('admin-head.php');
include('admin-header.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE from orders Where id= '$id'";
    mysqli_query($conn, $sql);
}
?>

<body>


    <?php

    include('admin-sidebar.php');

    ?>
    <script>
        var a = document.querySelector("#admin-order");
        a.classList.add("active");
    </script>
    <div class="admin-container">
        <h1 class="dash">
            Dashboard
            <small>Control panel</small>
        </h1>

        <div class="container">
            <h3 class="mb-2">Orders</h3>

            <ul class="list-unstyled admin-ul">
                <?php
                $sql = "SELECT * FROM orders";
                $result = mysqli_query($conn, $sql);
                while ($final = mysqli_fetch_assoc($result)) { ?>
                    <li>
                        <a href="ordershow.php?id=<?php echo $final['id'] ?>">

                            <button class="btn btn-outline-success me-5 p-3 ">
                                <h5 class=""><?php echo $final['id'] . ' : ' . $final['phone'] ?></h5>
                                <br>
                                <h5 class="">Total : <?php echo $final['total'] ?></h5>
                            </button>
                        </a>


                        <a href="orders.php?id=<?php echo $final['id'] ?>">
                            <button type="button" class="btn btn-outline-danger">Delete</button>
                        </a>
                    </li>
                <?php } ?>
                <!-- <li>
                    <a href="ordershow.php">
                        <h5>3: 03332975389</h5>
                        <br>
                        <h5>Total : 460</h5>

                    </a>

                    <a href="orders.php">
                        <button type="button" class="btn btn-outline-danger">Delete</button>
                    </a>
                </li> -->
            </ul>
        </div>

    </div>
    <?php
    include('admin-footer.php');
    ?>
</body>

</html>