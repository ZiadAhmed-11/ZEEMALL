<?php

use App\Database\Models\User;
use App\Http\Requests\Validation;

ob_start();
session_start();

include "App/Http/Requests/Validation.php";
include "App/Database/Models/User.php";

$validation=new Validation;
if($_SERVER['REQUEST_METHOD']=='POST'&&!empty($_POST))
 {
  

//validation

    $validation->setValueName('email')->setValue($_POST['email'])->
    required()->regex("/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/")->exists('users','email');
    $validation->setValueName('password')->setValue($_POST['password'])->required();
if(empty($validation->getErrors()))
    {

        //check if data is correct
        $user=new User;
        $user->setEmail($_POST['email']);
        $result=$user->getUserByEmail();
        if($result->num_rows==1)
        {
            //correct email
            $userData=$result->fetch_object();
            if(password_verify($_POST['password'],$userData->password))
            {
              
                
                $_SESSION['user']=$userData;
                
                header('location:home.php?email='.$_POST['email']);die;
            }
            else{
                $error="<p class='text-danger font-weight-bold'>Wronge Email or Password</p>";
            }
        }
        else
        {
            $error="<p class='text-danger font-weight-bold'>Wronge Email or Password</p>";
        }

    }

  else
  {
      $error="<p class='text-danger font-weight-bold'>Wronge Email or Password</p>";
  }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Zee|Mall-login</title>
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

   
   
  #box {
    width: 50%;
  margin: 30px auto;
  height: 200%;
  font-size: large;
    
  } 
  </style>      

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <nav id="nav1">
       
       <a class="navbar-brand" href="">Zee|Mall</a>
       
       <ul>
         <li><div class="search-container">
           <input type="text" name="search" placeholder="Search" class="search-input">
           <a href="#" class="search-btn">
                   <i class="fas fa-search"></i>      
           </a>
       </div></li>
           <li><a href="#">Best sales</a></li>
           <li><a href="#">New products</a></li>
      
           <li><a href="login.php">Login</a></li>
           <li><a href="signup.php">Sign up</a></li>
           <li><a href="#"><img src="1.png" alt=""></a></li>
           
       </ul>
 
   </nav>
    
 
             <div id="box" class=" p-5 bg-transparent" >
              <h2 class="text-uppercase text-secondary text-center display-4 mb-5">Login</h2>

              <form method="post">

                
                
                <div class="form-outline mt-4">
                  <input type="email" id="form3Example3cg"  name="email"
                    class="form-control form-control-lg" placeholder="Email" />
                    <?= $validation->getMessage('email') ?>

                </div>

                <div class="form-outline mt-4">
                  <input type="password" id="form3Example4cg" placeholder="Password" name="password"
                    class="form-control form-control-lg" />
                    <?= $validation->getMessage('password') ?>

                </div>

          
                

                
                <p class="small text-center fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="register.php"
                  class="link-danger">Register</a></p>

                <div class="button-box mt-3 d-flex justify-content-center">
                  <button class="btn btn-info  btn-lg gradient-custom-4 "
                    type="submit">login</button>
                </div>


              </form>

            </div>
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php
        session_destroy();
        ob_end_flush();
        ?>