<html lang="en">
<?php
include('session.php');

include('admin-head.php');
include('admin-header.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE from categories Where id= '$id'";
    mysqli_query($conn, $sql);
}
?>

<body>
    <?php
    include('admin-sidebar.php');
    ?>
    <script>
        var a = document.querySelector("#admin-category");
        a.classList.add("active");
    </script>

    <div class="admin-container">
        <h1 class="dash">
            Dashboard
            <small>Control panel</small>
        </h1>

        <div class="container">
            <h3 class="mb-2">Category</h3>
            <a href="addcategory.php">
                <button class="btn btn-outline-success">Add New</button>
            </a>
            <hr>
            <ul class="list-unstyled admin-ul">


                <?php
                $sql = "SELECT * FROM categories";
                $result = mysqli_query($conn, $sql);
                while ($final = mysqli_fetch_assoc($result)) { ?>
                    <li>
                        <div class="row">
                            <div class="col-9">
                                <a href="categoryshow.php?id=<?php echo $final['id'] ?>">
                                    <h5 class=""><?php echo $final['id'] . ' : ' . $final['name'] ?></h5>
                                </a>
                                <a href="category-update.php?id=<?php echo $final['id'] ?>">
                                    <button class="btn btn-warning">Update</button>
                                </a>
                                <a href="admin-category.php?id=<?php echo $final['id'] ?>">
                                    <button class="btn btn-danger">Delete</button>
                                </a>
                            </div>
                            <div class="col-3">
                                <img src=<?php echo $final['category_picture'] ?> alt="" height="150px" width="150px">
                            </div>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>

    </div>
    <?php
    include('admin-footer.php');
    ?>

</body>


</html>