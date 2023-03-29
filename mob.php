<?php

include "layouts/header1.php";
include "App/Http/middlewares/navbar.php";


use App\Database\Models\Product;

include 'App/Database/Models/Product.php';

?>


    <div class="container" >
        <nav id="nav2">
            <a class="logo" href="#">Mobiles</a>
            <ul>
                <li><a href="clothes.php">Clothes</a></li>
                <li><a href="elec.php">Electronics</a></li>
                <li><a href="building.php">Buildings</a></li>
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
                <img src="iphone.png" alt="">
            </div>
        </div>
    </div>
<div style="text-align: center;">
    <select style="padding: 10px; background:#eee; border:none; ">
        <option value="">-- Filter -- </option>
        <option value="paris">Price: Low to high</option>
        <option value="london">Price: High to low</option>
        <option value="athens">New products</option>
      </select>
</div>

    <div class="container1">
        <h3 class="title"> Products</h3>

    <div class="products-container">
        
            <div class="product" data-name="p-1">
                <img src="images/s22.png" alt="">
                <h3>Samsung Galaxy S22 Ultra</h3>
                <div class="price">$ 399</div>
            </div>

            <div class="product" data-name="p-2">
                <img src="images/s20.png" alt="">
                <h3>Samsung Galaxy S20 Ultra</h3>
                <div class="price">$ 399</div>
            </div>


        </div>
    </div>
    
    <div class="products-preview">
        <div class="preview " data-target="p-1">
            <i class="fas fa-times"></i>
            <img src="images/s22.png" alt="">
            <h3>Samsung Galaxy S22 Ultra</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span>(250)</span>
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, cum?</p>
            <div class="price">$399</div>
            <div class="buttons">
                <a href="#" class="buy">Buy now</a>
                <a href="#" class="cart">Add to cart</a>

            </div>
        </div>

        <div class="preview " data-target="p-2">
            <i class="fas fa-times"></i>
            <img src="images/s20.png" alt="">
            <h3>Samsung Galaxy S20 Ultra</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span>(250)</span>
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, cum?</p>
            <div class="price">$399</div>
            <div class="buttons">
                <a href="#" class="buy">Buy now</a>
                <a href="#" class="cart">Add to cart</a>

            </div>
        </div>
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
    
        nav1.style="display:flex;position:fixed;top:0;width:100%;margin-top:"+val3/2+"px;      background:rgb(238, 238, 238);";
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



</body>
</html>
