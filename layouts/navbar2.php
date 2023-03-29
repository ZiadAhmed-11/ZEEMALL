
<nav id="nav1">
       
       <a class="navbar-brand" href="home.php">Zee|Mall</a>
       
       <ul>
         <li>
            <form method="post"><div class="search-container">
           <input type="text" name="search" placeholder="Search" class="search-input">
           <button href="#"  class="search-btn"> </button>
                   <i class="fas fa-search"></i>      
           </a>
       </div></form>
    </li>
           <li><a href="bestsales.php">Best sales</a></li>
           <li><a href="newproducts.php">New products</a></li>
      
           <li><a href="like.php"><img src="images/love.png" style="width: 22px;"  alt=""></a></li>
           <li><a href="carts.php"><img src="images/cart.png" style="width: 22px;" alt=""></a></li>
           <!-- <li><a href="profile.php"><img src="images/user.png" style="width: 22px;" alt=""></a></li> -->
           <li id="logout1"style="display: none;" ><a href="logout.php"><img src="images/logout.png" style="width: 17.5px;" alt=""></a></li>
           <li id="logout2" style="display:block;"><a href="logout.php"><img src="images/door.png" style="width: 17.5px;" alt=""></a></li>
           
       </ul>
 
   </nav>

   <div id="nav-scroll" style="display: none;">
   <div id="nav1" >
      
       <a class="navbar-brand" href="">Zee|Mall</a>
       <ul>
           <li><div class="search-container">
               <input type="text" name="search" placeholder="Search" class="search-input">
               <a href="#" class="search-btn">
                       <i class="fas fa-search"></i>
           <li><a href="Bestsales.php">Best sales</a></li>
           <li><a href="newproducts.php">New products</a></li>
      
           <li><a href="login.php"><img src="images/love.png" style="width: 22px;"  alt=""></a></li>
           <li><a href="carts.php"><img src="images/cart.png" style="width: 22px;" alt=""></a></li>
           <li id="logout1"style="display: none;" ><a href="logout.php"><img src="images/logout.png" style="width: 17.5px;" alt=""></a></li>
           <li id="logout2" style="display:block;"><a href="logout.php"><img src="images/door.png" style="width: 17.5px;" alt=""></a></li>
           
       </ul>

   </div>
</div>
<script>
let logout1=document.getElementById("logout1")
let logout2=document.getElementById("logout2")
logout2.onmouseover=function(){
logout1.style.display='';
logout2.style.display='none';
}
logout1.onmouseleave=function(){
    logout1.style.display='none';
logout2.style.display='';
}
</script>