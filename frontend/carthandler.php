<?php
session_start();
include('head.php');
include("../admin/connection.php");
if ($_GET['mode']=='placeorder') {
    if(empty($_SESSION['email'] AND $_SESSION['password'])){
        header('location:customerlogin.php');
    }else{
        $address=$_POST['address'];
        $phone=$_POST['phone'];
        $total=$_POST['total'];
        $payment=$_POST['payment-method'];
        $username=$_SESSION['email'];
        $sql2= "SELECT * FROM customers WHERE username = '$username'";
        $result2=mysqli_query($conn,$sql2);
        $final2=mysqli_fetch_assoc($result2);
        $customer_id=$final2['id'];
        $sql="INSERT into orders(customer_id,address,phone,total,pay_method) VALUES ('$customer_id','$address','$phone','$total','$payment')";
        mysqli_query($conn,$sql);
        echo "<script>alert('Thanks For Ordering');
                location.href='index.php';
                </script>";
    }
}else {   
    $prodid = $_GET['id'];
    if (isset($_SESSION['cart'])) {
    if ($_GET['mode'] != 'delete') {
        if (in_array($prodid, $_SESSION['cart'])) {
            echo "<script>alert('Product Is Already In The Cart');
            history.go(-1)
                </script>";
        } else {
            $count = count($_SESSION['cart']);
            $_SESSION['cart'][$count] = $prodid;
            echo "<script>
            history.go(-1)
                </script>";
        }
    } else {
        if (($key = array_search($prodid, $_SESSION['cart'])) !== false) {
            unset($_SESSION['cart'][$key]);
        }
        echo "<script>
        history.go(-1)
    		</script>";
    }
} else {
    $_SESSION['cart'][0] = $prodid;
    echo "<script>
        history.go(-1)
    		</script>";
}
}

