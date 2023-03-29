<?php 

if(isset($_SESSION['user'])){
    include"layouts/navbar2.php";

    // header('location:products.php');die;
}
else{
include"layouts/navbar1.php";
}

