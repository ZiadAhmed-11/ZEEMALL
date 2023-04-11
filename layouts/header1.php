<?php

use App\Database\Models\Cart;
include "App/Database/Models/Cart.php";

ob_start();
session_start();


if($_SERVER['REQUEST_METHOD']=='POST'&&!empty($_POST))
{
    if(isset($_POST['search'])&&!empty($_POST['search']))
    {
header('location:search.php');
$_SESSION['search']=$_POST['search']  ;  
}
    else if(isset($_POST['quantity']))
    {
        if(isset($_SESSION['user'])){
        $product_cart = new Cart;
        $product_cart->setuser_id($_SESSION['user']->id)->setProduct_id($_POST['hidden_id'])->setQuantity($_POST['quantity']);
        if($product_cart->create())
        {
            // echo "SUCCESS";
        }
    }
    else
    {
        header('location:login.php');
        die;
       }
    }

    if(isset($POST['remove_product'])){
        // $product_cart = new Cart;
        // $product_cart->setUser_id($_SESSION['user']->id)->setProduct_id($_POST['remove_product'])->
        // setQuantity($_POST['remove_quantity']);
        // if($product_cart->delete())
        // {
        //     echo "SUCCESS";
        // }

        
     $command = "DELETE FROM carts WHERE product_id= ".$_POST['remove_product']." AND    quantity=".$_POST['remove_quantity'] ." AND user_id=".$_SESSION['user']->id;
     mysqli_query($conn,$command);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/style1.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="script.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600&display=swap" rel="stylesheet">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Gloock&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<!--FONT AWESOME-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap" rel="stylesheet">

<style>
     .footer{
background: linear-gradient(135deg,#000);
padding:10px 0px;
font-family: 'Play', sans-serif;
text-align:center;
}

.footer .row1{
width:100%;
margin:0.5% 0%;
padding:0.6% 0%;
color:gray;
font-size:1.2em;
}

.text{
    cursor: pointer;
}
.container #nav2{
    width: 90%;
}


.footer .row1 a{
text-decoration:none;
color:gray;
transition:0.5s;
}


.footer .row1 a:hover{
color:#fff;
}

.footer .row1 ul{
width:100%;
}

.footer .row1 ul li{
display:inline-block;
margin:0px 30px;
}

.footer .row1 a img{
font-size:2em;
margin:0% 0.5%;
}

@media (max-width:720px){
.footer{
text-align:center;
padding:5%;
}

.footer .row1 ul li{
display:block;
margin:10px 0px;
text-align:left;
}
.footer .row1 a i{
margin:0% 3%;
}
}
.subcategory{
    background: linear-gradient(220deg,#5675ff,#da3c3c);
    width: 100px;
    text-align: center;
    padding: 30px 0;
    border-radius: 50%;
}

.container{
    width:90%;
    height: 80%;
    /* background: linear-gradient(220deg,#5675ff,#da3c3c); */
    animation: gradient 15s ease infinite;
    border-radius: 20px;
    overflow: hidden ;
    justify-content: center;
    align-items: center;
margin: 20px auto;
background: linear-gradient(220deg, #5675ff, #da3c3c, #5675ff, #da3c3c, #5675ff, #da3c3c );
	background-size: 400% 400%;
	animation: gradient 5s ease end;
}

@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}
.products-preview .preview{
    display: none;
    padding: 2rem;
    text-align: center;
    background: #eee;
    position: relative;
    margin: 2rem;
    width: 40rem;
}
.buttons{
    display: flex;
    align-items: center;
}
.addToCard{
    flex: 1 1 16rem;
    padding: 1rem;
    font-size: 1.8rem;
    color: #444;
    border: .1rem solid #444;
    background: #444;
    color: #fff;
}
.addToCard:hover{
    background: #111;

}


.buttons input[type=number]{
    width: 30%;
    height: 20px;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 10px;
    border-right: 5px solid #ccc;
    margin: 0px 0;
    box-sizing: border-box;
    resize: vertical;
  }
  
  .cart_show table {
  border-collapse: collapse;
  width: 100%;
  font-size: large;
  margin: 50px auto;
  width: 90%;
  
}

.cart_show th, td {
  text-align: left;
  padding: 8px;
}

.cart_show tr:nth-child(even) {background-color: #f2f2f2;}
</style>
</head>
<body>

</style>
</head>
<body>
