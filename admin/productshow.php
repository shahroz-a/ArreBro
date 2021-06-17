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
            $id= $_GET['id'];
            $sql = "SELECT * from products WHERE id= '$id'";
            $result = mysqli_query($conn, $sql);
            $final = mysqli_fetch_assoc($result);
            $name = $final['name'];
            $price = $final['price'];
            $desc = $final['description'];
            $category_id= $final['category_id'];
            $photo = $final['picture'];

            $sql2 = "SELECT name from categories WHERE id= '$category_id'";
            $result2 = mysqli_query($conn, $sql2);
            $final2 = mysqli_fetch_assoc($result2);
            
            ?>
            <div class="row">
                <div class="col-6">
                <img src=<?php echo $photo ?> alt="" height="400px" width="400px" >
                </div>
                <div class="col-6">
                <ul class="list-unstyled admin-ul">
                <li>
                    <h5>ID: <?php echo $id ?></h5>
                </li>
                <li>
                    <h5>Name : <?php echo $name ?></h5>
                </li>
                <li>
                    <h5>Price : <?php echo $price ?></h5>
                </li>
                <li>
                    <h5>Description : <?php echo $desc ?></h5>
                </li>   
                <li>
                    <h5>Category : <?php echo $final2['name'] ?></h5>
                </li>           
            </ul>
                </div>
            </div>

            
        </div>

    </div>
    <?php
    include('admin-footer.php');
    ?>
</body>

</html>