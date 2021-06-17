<html lang="en">
<?php

include('session.php');
include('admin-head.php');
include('admin-header.php');
include('admin-sidebar.php');
?>

<body>
    
    <script>
        var a = document.querySelector("#admin-home");
        a.classList.add("active");
    </script>

    <div class="admin-container">

        <h1 class="dash">
            Dashboard
            <small>Control panel</small>
        </h1>
        <h3>Quick Links</h3>
        <hr>
        <ul class="list-unstyled admin-ul">
            <li>
                <a href="addproduct.php">
                    <button type="button" class="btn btn-success">Add Product</button>
                </a>
            </li>
            <li>
                <a href="addcategory.php">
                    <button type="button" class="btn btn-success">Add Category</button>
                </a>
            </li>
            <li>
                <a href="orders.php">
                    <button type="button" class="btn btn-success">See All Orders</button>
                </a>
            </li>
        </ul>



    </div>



    <?php
    include('admin-footer.php');
    ?>
</body>

</html>