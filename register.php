<?php
// ob_start();
// session_start();
use App\Database\Models\User;
use App\Http\REquests\Validation;

include "layouts/header1.php";
include "layouts/navbar2.php";

include "App/Database/Models/User.php";
include "App/Http/Requests/Validation.php";
// $validation=new Validation;

// if($_SERVER['REQUEST_METHOD']=='POST'&&!empty($_POST))
// {

//   $validation->setValueName("First Name")->setValue($_POST['first_name'])->required()->String()->max(32);
//   $validation->setValueName("Last Name")->setValue($_POST['last_name'])->required()->String()->max(32);
//   $validation->setValueName("phone")->setValue($_POST['phone'])->required()->unique('users','phone')->regex("/^01[0125][0-9]{8}$/");
//   $validation->setValueName("Email")->setValue($_POST['email'])->required()->unique('users','email')->String()->regex("/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/");
//   $validation->setValueName("Password")->setValue($_POST['password'])->required()->confirmed($_POST["password_confirmation"]);
//   $validation->setValueName("Password confirmation")->setValue($_POST['password_confirmation'])->required();
//   $validation->setValueName("Gender")->setValue($_POST['gender'])->required()->in(['m','f']);
  
// if(empty($validation->getErrors()))
// {
//     $verification_code= rand(100000,999999);


//     $user = new User;
//     $user->setFirst_name($_POST['first_name'])->setLast_name($_POST['last_name'])->setPhone($_POST['phone'])
//     ->setEmail($_POST['email'])->setPassword($_POST['password'])->setGender($_POST['gender'])
//     ->setVerification_code($verification_code);

//     if($user->create())
//     {
//       $user->setEmail($_POST['email']);
//       $result=$user->getUserByEmail();
//       if($result->num_rows==1)
//       {
//           //correct email
//           $userData=$result->fetch_object();
//           {

//               $_SESSION['user']=$userData;
              
//               header('location:home.php?email='.$_POST['email']);
//               die;
//           }
         
//       }
      

$validation=new Validation;

if($_SERVER['REQUEST_METHOD']=='POST'&&!empty($_POST))
{
$validation->setValueName("First Name")->setValue($_POST['first_name'])->required()->String()->max(32);
$validation->setValueName("Last Name")->setValue($_POST['last_name'])->required()->String()->max(32);
$validation->setValueName("phone")->setValue($_POST['phone'])->required()->unique('users','phone')->regex("/^01[0125][0-9]{8}$/");
$validation->setValueName("Email")->setValue($_POST['email'])->required()->unique('users','email')->String()->regex("/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/");
$validation->setValueName("Password")->setValue($_POST['password'])->required()->confirmed($_POST["password_confirmation"]);
$validation->setValueName("Password confirmation")->setValue($_POST['password_confirmation'])->required();
$validation->setValueName("Gender")->setValue($_POST['gender'])->required()->in(['m','f']);

if(empty($validation->getErrors()))
{
    $verification_code= rand(100000,999999);


    $user = new User;
    $user->setFirst_name($_POST['first_name'])->setLast_name($_POST['last_name'])->setPhone($_POST['phone'])
    ->setEmail($_POST['email'])->setPassword($_POST['password'])->setGender($_POST['gender'])
    ->setVerification_code($verification_code);

    if($user->create())
    {
        $_SESSION['verification_email']=$_POST['email'];
        header("location:login.php?email=".$_POST['email']);
    }
    else
    {
        $error="<div class='alert alert-danger text-center>Somting went wrong</div>'";
    }
}
} 
      //************************************ */
// echo '<div class="alert text-center pb-5 pt-5 ml-5 mr-5 alert-success" role="alert">
//   <h4 class="alert-heading">Well done!</h4>
//   <p>Your Account created <big>successfully</big></p>
//   <hr>
//   <p class="mb-0">Now go to the home page and  </p>
//   <a href="home.php">Sign in</a>
// </div>';
      
        // header("location:home.php?email=".$_POST['email']);
        //***************************************** */
//     }
//     else
//     {
//         $error="<div class='alert alert-danger text-center>Somting went wrong</div>'";
//     }
// }

// }


?>  


  
    

   <div class="container5">
    <h1>Sign up</h1>
  <form method="post">
    <div class="row">
      
    <input type="text" id="fname" name="first_name" value="<?= $_POST['first_name'] ??"" ?>" placeholder="Your first name">
    <?=$validation->getmessage('First Name')  ?>
  
  </div>
    <div class="row">
     
        <input type="text" id="lname" name="last_name" value="<?= $_POST['last_name'] ??"" ?>" placeholder="Your last name">
        <?=$validation->getmessage('Last Name')  ?>

      </div>
    <div class="row">
     
        <input type="text" id="lname" name="email" value="<?= $_POST['email'] ??"" ?>" placeholder="Your email">
        <?=$validation->getmessage('Email')  ?>

      </div>
    <div class="row">
     
        <input type="password" id="lname" name="password" placeholder="Your password">
        <?=$validation->getmessage('Password')  ?>

      </div>
    <div class="row">
     
        <input type="password" id="lname" name="password_confirmation" placeholder="Repeat Your password">
        <?=$validation->getmessage('Password confirmation')  ?>

      </div>
    <div class="row">
     
        <input type="tel" id="lname" name="phone" <?= $_POST['phone'] ??"" ?> placeholder="Your phone">
        <?=$validation->getmessage('Phone')  ?>

      </div>
    <div class="row">
     
    <select name="gender" class="form-control">
                                            <option
                                                <?= isset($_POST['gender'])&& $_POST['gender']=='m' ?'selected' : "" ?>
                                                value="m">Male</option>
                                            <option
                                                <?= isset($_POST['gender'])&& $_POST['gender']=='f' ?'selected' : "" ?>
                                                value="f">Female</option>
                                        </select>
                                        <?=$validation->getmessage('gender')  ?>
      </div>
    
    <div class="row">
    <button type="submit"><span>Submit</span></button>
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



</body>
</html>
<?php
        session_destroy();
        ob_end_flush();
        ?>