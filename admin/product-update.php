<html lang="en">
<?php
include('session.php');

include('admin-head.php');
include('admin-header.php');

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $desc = $_POST['description'];
    $category_id = $_POST['category_id'];
    if (!empty($_FILES['photo']['name'])) {
        $target_dir = "../used/";
        $file_path = $target_dir . basename($_FILES['photo']['name']);
        // echo $file_path;
        move_uploaded_file($_FILES["photo"]["tmp_name"], $file_path);
        $sql = "UPDATE products SET name ='$name' , price='$price',description='$desc', category_id='$category_id', picture= '$file_path' WHERE id='$id' ";
        if (mysqli_query($conn, $sql)) {
            header('location:admin-product.php');
        }
    }else {
        $sql = "UPDATE products SET name ='$name' , price='$price',description='$desc', category_id='$category_id' WHERE id='$id' ";
        if (mysqli_query($conn, $sql)) {
            header('location:admin-product.php');
        }  
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
            <?php

            $id = $_GET['id'];
            $sql = "SELECT * from products WHERE id= '$id'";
            $result = mysqli_query($conn, $sql);
            $final = mysqli_fetch_assoc($result);
            $name = $final['name'];
            $category_id= $final['category_id']; 
            ?>
            <form class="row g-3" action=<?php echo $_SERVER['PHP_SELF'] ?> method='POST' enctype="multipart/form-data">
                <input type="hidden" name="id" id="id" value="<?php echo $final['id'] ?>">

                <div class="col-12">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $final['name'] ?>">
                    </div>
                    <div class=" col-12">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" id="price" name="price" value="<?php echo $final['price'] ?>">
                    </div>
                    <div class=" col-12">
                    <label for="photo" class="form-label">Photo</label>
                    <input type="file" class="form-control" id="photo" name='photo'>
                    <?php echo  " Current File location : " . $final['picture'] ?>

                </div>

                <div class="col-12">
                    <label for="desc" class="form-label">Description</label>
                    <textarea class="form-control" id="desc" rows="10" name="description" ><?php echo $final['description'] ?></textarea>
                    </div>
                    <div class=" col-12">
                        <?php
                            $sql2 = "SELECT name from categories WHERE id= '$category_id'";
                            $result2 = mysqli_query($conn, $sql2);
                            $final2 = mysqli_fetch_assoc($result2);
                        ?>
                    <label for="category" class="form-label">Category</label>
                    <select id="category_id" class="form-select" name="category_id" >
                    <option selected value=<?php echo $final['id'] ?>><?php echo $final2['name'] ?></option>
                    <?php
                    $sql = "SELECT * from categories";
                    $result = mysqli_query($conn, $sql);
                    while ($final = mysqli_fetch_assoc($result)) {  
                        if($final['id'] != $category_id){?>
                            <option value="<?php echo $final['id'] ?>"><?php echo $final['name'] ?></option>
                        <?php } }?>
                    </select>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" name="submit" value="submit" id="submit">Submit</button>
                    </div>
                </form>
        </div>
    
    </div>
    <?php
    include('admin-footer.php');
    ?>
</body>
</html>