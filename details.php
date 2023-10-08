<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css">

    <script src="assets/vendors/jquery/jquery-3.4.1.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>    

    <link rel="stylesheet" type="text/css" href="assets/css/styles.css" >

    <style>
        
    </style>
    <script src="assets/js/scripts.js" ></script>

</head>
<body class="d-flex flex-column h-100">
    <?php 
        include_once "./layouts/header.php";
        include_once "./robotInit.php";
    ?>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <table class="table table-dark text-center shadow">
                    <div class="card" style="width: 18rem;">
                        <img src=<?php echo "./assets/images/{$this->image}"; ?> class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo "./assets/images/{$this->name}"; ?> </h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                        </div>
                    </table>
                </div>
            </div>
        </div>
        <?php include_once "./layouts/footer.php"; ?>
    </main>
</body>