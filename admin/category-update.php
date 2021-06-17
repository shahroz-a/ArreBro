<html lang="en">
<?php
include('session.php');

include('admin-head.php');
include('admin-header.php');

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
   if(!empty($_FILES['photo']['name'])){
    $target_dir = "../used/";
    $file_path = $target_dir . basename($_FILES['photo']['name']);
    // echo $file_path;
    move_uploaded_file($_FILES["photo"]["tmp_name"], $file_path);
    $sql = "UPDATE categories SET name ='$name' , category_picture= '$file_path' WHERE id='$id' ";
    if(mysqli_query($conn, $sql)){
        header('location:admin-category.php');
    }
   }else{
    $sql = "UPDATE categories SET name ='$name' WHERE id='$id' ";
    if(mysqli_query($conn, $sql)){
        header('location:admin-category.php');
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
            <h3 class="mb-5">CATEGORIES</h3>
            <?php
            $id = $_GET['id'];
            $sql = "SELECT * from categories WHERE id= '$id'";
            $result = mysqli_query($conn, $sql);
            $final = mysqli_fetch_assoc($result);
            $name = $final['name'];
            $photo = $final['category_picture'];
            ?>
            <form class="row g-3" action="category-update.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" id="id" value="<?php echo $final['id'] ?>">
                <div class="col-12">
                    <label for="name" class="form-label">Category Name</label>
                    <input type="text" class="form-control" name='name' id="name" value="<?php echo $final['name'] ?>">
                </div>
                <div class="col-12">
                    <label for="photo" class="form-label">Photo</label>
                    <input type="file" class="form-control" id="photo" name='photo'>
                    <?php echo "Current File Location : " . $final['category_picture'] ?>
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