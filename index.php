<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/styles/style.css">
    <link rel="stylesheet" href="assets/bootstrap-5.0.2-dist/css/bootstrap.css">
    <title>home</title>
</head>
<body>
    <?php 
        require('assets/php/function.php');
        $href = ['index.php','assets/about/about.php','assets/blog/blog.php','assets/login/login.php'];
    ?>
    <?= header_page($href)?>
    <main class="container-fluid p-0">
        <div class="container text-content">
            <h1 class="text-center text-dark ">  <span> WELCOME </span>and thanx for your visit</h1>
        </div>
        <div class="container container-img">
            <img src="assets/images/Cyber attack-cuate.svg" alt="">
        </div>
    </main>
    <script src="assets/bootstrap-5.0.2-dist/js/bootstrap.js"></script>
</body>
</html>