
<?php
include "layouts/header1.php";
include "App/Http/middlewares/navbar.php";
// print_r($_SESSION['user']);
include "App/Http/middlewares/Auth.php";


if($_SERVER['REQUEST_METHOD']=='POST'&&!empty($_POST))
{
if(isset($_POST['remove_product'])){
    // $product_cart = new Cart;
    // $product_cart->setUser_id($_SESSION['user']->id)->setProduct_id($_POST['remove_product'])->
    // setQuantity($_POST['remove_quantity']);
    // if($product_cart->delete())
    // {
    //     echo "SUCCESS";
    // }

    $conn=mysqli_connect("localhost","root","","nti_ecommerce");

 $command = "DELETE FROM carts WHERE product_id= ".$_POST['remove_product']." AND    quantity=".$_POST['remove_quantity'] ." AND user_id=".$_SESSION['user']->id;
 mysqli_query($conn,$command);
}
}
?>
 <div class="cart_show">
 <table >
  <tr>
  <th>Product Name</th>
  <th>Quantity</th>
  <th>price</th>
  <th>Total</th>
  <th>Action</th>
  </tr>
  <?php
        $conn=mysqli_connect("localhost","root","","nti_ecommerce");
    // $b=1;
    // $req1="SELECT * FROM carts WHERE user_id=". $_SESSION['user']->id;
    //   $query1=mysqli_query($conn,$req1);
    //   $fetch=mysqli_fetch_object($query1);

    //   $req2="SELECT name_en FROM products WHERE product_id=". $fetch->product_id;
    //   $query2=mysqli_query($conn,$req2);
    // while($fetch=mysqli_fetch_object($query1))
    // {
        
$req="SELECT *  FROM carts where user_id=". $_SESSION['user']->id ;
$query1=mysqli_query($conn,$req);
// if((empty($fetch=mysqli_fetch_object($query1)))){
//    ?> 
<!-- //    <tr>
//   <td style='text-align:center; padding-top:25px;padding-bottom:25px;' colspan='5'>Empty cart ...</td>
//   </tr>"; -->

   <?php
// }
// else{
while($fetch=mysqli_fetch_object($query1))
{
?>
              <?php   
$req2="SELECT name_en , name_ar ,price  FROM products where id= ". $fetch->product_id ;
$query2=mysqli_query($conn,$req2);
$fetch2=mysqli_fetch_object($query2);
// $req3="DELETE FROM customers WHERE patient_id = ". $fetch->patient_id;

    ?>
  <tr>
  <td><?= $fetch2->name_en?></td>
  <td><?=$fetch->quantity?></td>
  <td>$<?=$fetch2->price ?></td>
  <td>$<?=$fetch2->price * $fetch->quantity?></td>
  <td>
    <form method="post" >
    <input type="hidden" value="<?=$fetch->product_id ?>" name="remove_product">
    <input type="hidden" value="<?=$fetch->quantity?>" name="remove_quantity">
    <button type="submit" style="background-color: #A30000;" >Remove</button>
    </form>
  </td>
  </tr>
  <?php
}
// }
?>
     
</table>

        
    </div>

    <script>
        let image_top=document.querySelector('.content .image img');
        nav1=document.getElementById('nav-scroll');

        window.onscroll=function(){
            let value=window.scrollY;
            image_top.style="margin-top:"+ -value*0.75+"px";
            let value2=window.scrollY;
                let val3=window.scrollY-160     ;

                if(value2>=060){
    
    nav1.style="display:flex;position:fixed;top:0;width:100%;margin-top:"+val3/2+"px;     background:rgb(238, 238, 238);";
if(value2>=160)
{
nav1.style="display:flex;position:fixed;top:0;width:100%;margin-top:0px;     background:rgb(238, 238, 238);";

}
}
else{
    nav1.style="position:none;display:none;";
}
        }
    
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration:1400
        });
        
      </script>

<script>
document.getElementById('my-select').addEventListener('change', function() {
//   console.log('You selected: ', this.value);
$req="SELECT name_en FROM Subcategories where category_id=1 ".this.value;


});
</script>

</body>
</html>