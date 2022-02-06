<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.css">
    <title>Signup page</title>
</head>
<body>
<?php
     require('../php/function.php');
     $href = ['.../index.php','./about/about.php','./blog/blog.php','login.php'];
    ?>
    <?= header_page($href)?>
   <main class="container-fluid h-100">
       <div class="header_container container-fluid p-0"></div>
       <div class="container_form  d-grid b-radius container-fluid d-grid p-0">
           <div class="form">
               <form action="" class="form">
               <div class="container-fluid title_container"><h1 class="text-center title">SIGN UP</h1></div>
                   <div class="form-group my-2">
                       <input type="text" name="username" id="username" placeholder="Userame" class="pt-2  form-control">
                   </div>
                   <div class="form-group my-2">
                        <input type="email" name="email_address" id="email_address" placeholder="Email address" class="pt-2 form-control">
                    </div>
                    <div class="form-group my-2">
                        <input type="number" name="mobile_number" id="mobile_number" placeholder="Mobile number" class="pt-2 form-control">
                    </div>
                    <div class="form-group my-2">
                        <input type="password" name="password" id="password" placeholder="Password" class="pt-2 form-control">
                    </div>
                    <div class="form-group my-2">
                        <input type="password" name="confirm_password" id="confirm_password" placeholder="Comfirm password" class="pt-2 form-control">
                    </div>
                    <div class="form-group my-3">
                        <input type="submit" value="SIGN UP" class="btn btn_blue col-11 mx-3 pt-2">
                    </div>
               </form>
           </div>
       </div>
       <div class="Card b-radius">
                <div class="container-fluid mt-2"><h2 class="title text-center text-light">ARE YOU A *******?</h2></div>
                <div class="container"><h4 class="text text-center text-light">More than 10 million *** searching for you</h4></div>
                <div class="container-fluid d-flex justify-content-center mt-1"><button class="btn btn_blue col-5">Join Now</button></div>
                <div class="rule_white mt-1"></div>
        </div>
   </main>
   <script src="../bootstrap-5.0.2-dist/js/bootstrap.bundle.js"></script>
</body>
</html>