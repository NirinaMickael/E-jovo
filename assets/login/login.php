<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.css">
    <title>Login page</title>
</head>
<body>
    <?php
     require('../php/function.php');
     $href = ['../../index.php','../../assets/about/about.php','../../assets/blog/blog.php','login.php'];
    ?>
    <?= header_page($href)?>
    <main class="container-fluid h-100">
        <div class="container-fluid login px-0 b-radius">
            <div class="container-login container-fluid">
                <div class="form p-0 pt-3">
                    <div class="title_login"><h1 class="title text-light text">LOG IN</h1></div>
                    <form action="" class="form_">
                        <div class="form-group my-3">
                            <input type="text" name="username" id="username" placeholder="Username" class="form-control p-2">
                        </div>
                        <div class="form-group my-4">
                            <input type="text" name="password" id="password" placeholder="Password" class="form-control p-2">
                            <label for="password"><a href="" class="nav-link text text-light">Forgot password?</a></label>
                        </div>
                        <div class="form-group mt-5">
                            <input type="submit" value="LOGIN" class="btn btn_blue col-12  pt-2">
                        </div>
                        <div class="form-group mt-3">
                            <a href="" class="btn btn_blue col-12  pt-2">Connect with Facebook</a>
                        </div>
                    </form>
                </div>
                <div class="container"><a href="signup.php" class="nav-link text text-light text-center">Create a new account</a></div>
                <div class="rule_white mt-2"></div>
            </div>
        </div>
    </main>
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.bundle.js"></script>
    <script src="./script/login.js"></script>
</body>
</html>