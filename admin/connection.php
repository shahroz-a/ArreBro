<?php

$server="localhost";
$user="root";
$password="";
$db="arre_bro";
$conn=mysqli_connect($server,$user,$password,$db);

if(!$conn){
    die("NOt working".mysqli_connect_error());
    echo mysqli_connect_error();
}else{
    
}
?>