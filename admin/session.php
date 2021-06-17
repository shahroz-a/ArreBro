<?php
session_start();
if(empty($_SESSION['admin-email'] and $_SESSION['admin-password'])){
	header('location: adminlogin.php');
}
?>