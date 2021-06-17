<html lang="en">
<?php
include('session.php');

include('admin-head.php');
include('admin-header.php');

?>

<body>


    <?php
    include('admin-sidebar.php');

    ?>

    <div class="admin-container">
        <h1 class="dash">
            Dashboard
            <small>Control panel</small>
        </h1>

        <div class="container">
            <?php
            $id = $_GET['id'];
            $sql = "SELECT * from order_details WHERE order_id= '$id'";
            $result = mysqli_query($conn, $sql);
            $final = mysqli_fetch_assoc($result);

            ?>
            <ul class="list-unstyled admin-ul">
                <?php
                $sql2 = "SELECT * FROM orders where id ='$id'";
                $result2 = mysqli_query($conn, $sql2);
                $final2 = mysqli_fetch_assoc($result2);


                ?>
                <li>
                    <h5>CustomerNO : <?php echo $final2['customer_id'] ?></h5>
                </li>
                <li>
                    <h5>Total : <?php echo $final2['total'] ?></h5>
                </li>
                <li>
                    <h5>Address : <?php echo $final2['address'] ?></h5>
                </li>
                <li>
                    <h5>ProductNo : <?php echo $final['product_id'] ?></h5>
                </li>
                <li>
                    <h5>Quantity : <?php echo $final['quantity'] ?></h5>
                </li>
            </ul>
        </div>

    </div>
    <?php
    include('admin-footer.php');
    ?>
</body>

</html>