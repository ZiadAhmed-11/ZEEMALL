
<?php
include "layouts/header1.php";
include "App/Http/middlewares/navbar.php";
// print_r($_SESSION['user']);
?>
 

    <div class="container" >
        <nav id="nav2">
            <a class="logo" href="elec.php">Electronics</a>
            <ul>
                <li><a href="clothes.php">Clothes</a></li>
                <li><a href="mob.php">Mobiles</a></li>
                <li><a href="buildings.php">Buildings</a></li>
                <li><a href="others.php">Others</a></li>
            </ul>
        </nav>
        
        <div class="content">
            <div class="text">
                <H2>Apple Egypt, <br>Smart phones</H2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, quis aliquid.
                    Velit quae laboriosam enim.</p>
            </div>
            <div class="image">
                <img src="images/ps4.png" alt="">
            </div>
            
        </div>
    </div>
    
    <!-- <div class="subcategories">
        <div class="subcategory">Camiras</div>
        <div class="subcategory">Computers</div>
        <div class="subcategory">Headphones</div>
        <div class="subcategory">TVs</div>
        <div class="subcategory">Accessories</div>
    </div> -->
    <!-- <div id="options">
<div style="text-align: center;">
    <select style="padding: 10px; background:#eee; border:none; ">
        <option value="">-- All -- </option>
        
        <?php
      $conn=mysqli_connect("localhost","root","","nti_ecommerce");

      $req="SELECT name_en FROM Subcategories where category_id=1";
      $query1=mysqli_query($conn,$req);
      $s=1;
      while($fetch=mysqli_fetch_object($query1))
      {
        
      ?>
        <option value="<?= $fetch->name_en ?>"><?= $fetch->name_en ?></option>
        <?php
    $s++;
      }
      ?>
      </select>
</div>
<div style="text-align: center;">
    <select style="padding: 10px; background:#eee; border:none;" id="my-select">
        <option value="">-- Filter -- </option>
        <option value="ORDER BY pro_price DESC">Price: Low to high</option>
        <option value="ORDER BY pro_price ASC">Price: High to low</option>
        <option value="athens">New products</option>
      </select>
</div>
            <button type="submit"  class="botton" style=" background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;" id="btn">Get the Selected Value</button>

</div> -->
    <div class="container1">
        <h3 class="title"> Products</h3>

    <div class="products-container">
        
    <?php
$req="SELECT * FROM Products where subcategory_id=1";
      $query1=mysqli_query($conn,$req);
      $d=1;
      while($fetch=mysqli_fetch_object($query1))
      {
        ?>
            <div class="product" data-name="p-<?=$d?>">
                <img src="images/<?=$fetch->image?>" alt="">
                <h3><?=$fetch->name_en ?></h3>
                <div class="price">$<?=$fetch->price ?></div>
            </div>

    


       
        <?php
    $d++; } ?>
     </div>
    </div>
    

    <div class="products-preview">
    <?php
    $b=1;
    $req2="SELECT * FROM Products where subcategory_id=1";
      $query2=mysqli_query($conn,$req2);
    while($fetch=mysqli_fetch_object($query2))
    {
    ?>
       <div class="preview " data-target="p-<?=$b?>">
            <i class="fas fa-times"></i>
            <img src="images/<?=$fetch->image?>" alt="">
            <h3><?=$fetch->name_en ?></h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span>(250)</span>
            </div>
            <p style="max-height: 65px; overflow:hidden">$<?=$fetch->details_en ?></p>
            <div class="price">$<?=$fetch->price ?></div>
            <div class="buttons" diplay >
                <!-- <a href="#" class="buy" style="flex: .1 .1 10rem;
    padding: 1rem;
    font-size: 1.8rem;
    color: #444;
    border: .1rem solid #444;">Buy now</a> -->
    <form method="post">

<button type="submit" class="addToCard">Add to card</button>  
<input type="hidden" name="hidden_id" value="<?=$fetch->id ?>">
<input type="number" placeholder="Quantity" name="quantity" value="1" min="1" max="10">
    </form>              <!-- <a href="#" style="flex: .2 .2 12rem; " class="cart">Add to cart</a> -->
                <!-- <input style="background-color: #4CAF50;" type="number"> -->
               

            </div>
        </div>
<?php
$b++;}
?>
        
    </div>
    <?php
        include "layouts/footer.php";

    ?>

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