<?php 
if(isset($_SESSION['patient'])){
    header('location:home.php');die;
}
