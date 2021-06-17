
<?php
include('session.php');
include('admin-head.php');
include('admin-header.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
     $target_dir="../used/";
     $file_path=$target_dir . basename($_FILES['photo']['name']);
     move_uploaded_file($_FILES["photo"]["tmp_name"], $file_path);
     $sql = "INSERT INTO categories (name,category_picture) VALUES ('$name', '$file_path')";
     mysqli_query($conn,$sql);
     header('location:admin-category.php');
 }

?>
<!DOCTYPE html>

<html lang="en">
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
            <h3 class="mb-5">CATEGORIES</h3>
            <form class="row g-3" action=<?php echo $_SERVER['PHP_SELF']?> method='POST' enctype="multipart/form-data">
                <div class="col-12">
                    <label for="name" class="form-label">Category Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="col-12">
                    <label for="photo" class="form-label">Photo</label>
                    <input type="file" class="form-control" id="photo" name="photo">
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary" value="submit" name="submit">Submit</button>
                </div>
            </form>
        </div>

    </div>
    <?php
    include('admin-footer.php');
    ?>
</body>

</html>