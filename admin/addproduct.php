<html lang="en">
<?php
include('session.php');

include('admin-head.php');
include('admin-header.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $desc = $_POST['description'];
    echo 
    $category_id = $_POST['category_id'];
    $target_dir = "../used/";
    $file_path = $target_dir . basename($_FILES['photo']['name']);
    move_uploaded_file($_FILES["photo"]["tmp_name"], $file_path);
    $sql = "INSERT INTO products (name,price,picture,description,category_id) VALUES ('$name','$price' ,'$file_path','$desc','$category_id')";
    if(mysqli_query($conn, $sql)){
        header('location:admin-product.php');
    }
}
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
            <h3 class="mb-5">Products</h3>

            <form class="row g-3" action=<?php echo $_SERVER['PHP_SELF'] ?> method='POST' enctype="multipart/form-data">
                <div class="col-12">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="col-12">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" id="price" name="price">
                </div>
                <div class="col-12">
                    <label for="photo" class="form-label">Photo</label>
                    <input type="file" class="form-control" id="photo" name='photo'>
                </div>

                <div class="col-12">
                    <label for="desc" class="form-label">Description</label>
                    <textarea class="form-control" id="desc" rows="10" name="description"></textarea>
                </div>
                <div class="col-12">
                    <label for="category_id" class="form-label">Category</label>
                    <select id="category_id" class="form-select" name="category_id">
                        <?php
                        $sql = "SELECT * from categories";
                        $result = mysqli_query($conn, $sql);
                        while ($final = mysqli_fetch_assoc($result)) {  ?>
                            <option value="<?php echo $final['id']?>"><?php echo $final['name']?></option>
                        <?php } ?>

                    </select>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
                </div>
            </form>
        </div>

    </div>

    <?php
    include('admin-footer.php');
    ?>
</body>

</html>