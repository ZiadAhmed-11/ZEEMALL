<?php
ob_start();
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Zee|Mall</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.googleapis.com/css2?family=Gloock&display=swap" rel="stylesheet">

<style>
    body
    {
          background-image: url('wal.jpg');
          background-position:bottom ;
          background-repeat: no-repeat;
          max-width: 100%;
          height: auto;
          /* background-size: 100% 112%; */
 
          background-attachment: fixed;

    }

    
.search-container{
    background: #fff;
    height: 30px;
    border-radius: 30px;
    padding: 10px 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    transition: 0.8s;
    /*box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
    inset -7px -7px 10px 0px rgba(0,0,0,.1),
   7px 7px 20px 0px rgba(0,0,0,.1),
   4px 4px 5px 0px rgba(0,0,0,.1);
   text-shadow:  0px 0px 6px rgba(255,255,255,.3),
              -4px -4px 6px rgba(116, 125, 136, .2);
  text-shadow: 2px 2px 3px rgba(255,255,255,0.5);*/
  box-shadow:  4px 4px 6px 0 rgba(255,255,255,.3),
              -4px -4px 6px 0 rgba(116, 125, 136, .2), 
    inset -4px -4px 6px 0 rgba(255,255,255,.2),
    inset 4px 4px 6px 0 rgba(0, 0, 0, .2);
}

.search-container:hover > .search-input{
    width: 400px;
}

.search-container .search-input{
    background: transparent;
    border: none;
    outline:none;
    width: 0px;
    font-weight: 500;
    font-size: 16px;
    transition: 0.8s;

}

.search-container .search-btn .fas{
    color: #5cbdbb;
}

/* @keyframes hoverShake {
  0% {transform: skew(0deg,0deg);}
  25% {transform: skew(5deg, 5deg);}
  75% {transform: skew(-5deg, -5deg);}
  100% {transform: skew(0deg,0deg);}
} */

/* .search-container:hover{
  animation: hoverShake 0.15s linear 3;
} */
    
    .fa-times{
    position: absolute;
    top: 1rem;right: 1.5rem;
    cursor: pointer;
    color: #444;
    font-size: 2rem;

}

.fa-times:hover{
    transform: rotate(90deg);
}
  
    .card:hover {
    transform: scale(1.1);
  }

  .container2{
    max-width: 1200px;
    margin: 0 auto;

}
 

.category{
    
    margin: 8px 30px;
  
  }
  
  .card {
    transition: transform 0.2s ease;
    overflow: hidden;
    box-shadow: 0 8px 12px 0 rgba(22, 22, 26, 0.18);
    border-radius: 0;
    border: 0;
    width: 180px;
  } 

  *{
    font-family: 'Nunito', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;border: none;
    text-decoration: none;
    transition: a .2s linear;
    text-transform: capitalize;

}

html {
    font-size: 62.5%;
    overflow-x: hidden;
}





.container{
    width:80%;
    height: 80%;
    background:linear-gradient(#131313,#444);
    border-radius: 20px;
    overflow: hidden ;
    justify-content: center;
    align-items: center;
margin: 20px auto;
}
#nav1{
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 90%;
    margin: 0 auto;
    padding: 15px 0;
    font-size: 15px;
    color: #222;
}
#nav1 ul{
    display: flex;
}
#nav1 a
{
   
    font-family: 'Gloock', serif;
    text-decoration: none;
    color: #444;
}
#nav1 a:hover
{
    color: #111 ;
}
#nav1 .navbar-brand{
    font-size: 2.5rem;
}

#nav1 ul li{
    display: inline-block;
    margin: 0 15px;
}
#nav1 ul li img
{
width: 18px;
}

@media  (max-width:950px)
{
   
   #nav1{
        flex-direction: column;
        justify-content: center;

    }


    body::after
    {clip-path: circle(50% at bottom);}
}

  

</style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>



  <body>

    <?php
include "App/Http/middlewares/navbar.php";

    ?>

    <div id="container2" class=" container2 mt-5 mb-5 pb-5" >
      <div class="categories-container">
        <div class="row d-flex justify-content-center mb-5 pb-1" >
          
            <div id="card" class="category" style=" width: 160px;"  data-aos="zoom-in" data-aos-duration="1000">
              <a href="clothes.php">  <div class="card " >
                    <img style="width:100%;" src="cloth.jpg"   alt="appointment">
                   
                </div></a>
            </div>

            <div id="card" class="category" style=" width: 160px;"  data-aos="zoom-in" data-aos-duration="1500">
                <a href="elec.php"> <div class="card " >
                    <img src="ele.jpg" alt="doctors">
                    
                </div></a>
            </div>

            <div id="card" class="category" style=" width: 160px;" data-aos="zoom-in" data-aos-duration="2000">
                <a href="mob.php"><div class="card " >
                    <img src="mo.jpg" alt="doctors">
                    
                </div></a>
            </div>

            <div id="card" class="category" style=" width: 160px;" data-aos="zoom-in" data-aos-duration="2500">
                <a href=""> <div class="card " >
                    <img src="building.jpg" alt="doctors">
                    
                </div></a>
            </div>

            <div id="card" class="category" style=" width: 160px;"  data-aos="zoom-in" data-aos-duration="3000">
                <a href=""><div class="card " >
                    <img src="others.jpg" alt="doctors">
                    
                </div></a>
            </div></div></div></div>


            <!--     Log in  -->
            <div id="login-card" class="align-items-center h-100 gradient-custom-3" style="position: absolute;            top: 0; left: 0;
            height: 100vh;
            width: 100%;
            background-color: rgba(0, 0, 0, .8);
            display: none;
            align-items: center;
            justify-content: center;" >
              <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                  <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class=" bg-transparent" style= 'border-radius: 15px;'>
                      <div class="card-body p-5"> <div class=" p-5 bg-transparent" >

                        <h2 class="text-uppercase text-secondary text-center display-4 mb-5">Login</h2>
          
                        <form method="post">
          
                          
                          
                          <div class="form-outline mt-4">
                            <input type="email" id="form3Example3cg"  name="email"
                              class="form-control form-control-lg" placeholder="Email" />
                          </div>
          
                          <div class="form-outline mt-4">
                            <input type="password" id="form3Example4cg" placeholder="Password" name="password"
                              class="form-control form-control-lg" />
                          </div>
          
                    
                          
          
                          
                          <p class="small text-center fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="register.php"
                            class="link-danger">Register</a></p>
          
                          <div class="button-box mt-3 d-flex justify-content-center">
                            <button class="btn btn-info  btn-lg gradient-custom-4 "
                              type="submit">login</button>
                          </div>
          
          
                        </form>
          
                      </div>
                   </div> </div>
                  </div>
                </div>
              </div>
            </div> 
            </div>
            
    <!-- Optional JavaScript -->

    <script src="js/vanilla-tilt.min.js"></script>
    <script>
      VanillaTilt.init(document.querySelectorAll(".card"), {
      max: 25,
      speed: 400
	});
    </script>
    

    <script>

let login=document.getElementById('login');
login.onclick=function()
{
  let login_card=document.getElementById('login-card');
  login_card.style=" display:flex;"
  let container2=document.getElementById('container2');
  container2.style.display="none";
}
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        AOS.init({
            duration:1400
        });
      </script>
</body>
</html>
