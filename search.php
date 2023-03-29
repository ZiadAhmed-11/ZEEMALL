
<?php
include "layouts/header1.php";
include "App/Http/middlewares/navbar.php";
// print_r($_SESSION['user']);
?>
 

    
   
 
        
        <?php
      $conn=mysqli_connect("localhost","root","","nti_ecommerce");

     
      ?>
    
    
      
      </select>
</div>
    <div class="container1">
        <h3 class="title"> Products</h3>

    <div class="products-container">
        
    <?php
      $req='SELECT * FROM products WHERE name_en LIKE "$_POST["search"]%";';
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