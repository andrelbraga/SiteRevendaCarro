<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Revenda de Carros</title>
        
        <!--CDN Google-->
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

        <!-- CSS local-->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/nav.css">
        <link rel="stylesheet" href="css/header.css">

        <!--Bootstrap Plugin 3.3.7-->
        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
        <!--Font Awesome 5.0.6 -->
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    </head>
    <body>
        <div class="container">
            <?php
                /* Nav Dinâmico */
                include_once(__DIR__."/shared/nav.php"); 
            ?>
        </div>

            <?php
                /* Header Dinâmico */
                include_once(__DIR__."/shared/header.php"); 
            ?>

            <?php
                /* Body Dinâmico */
                include_once(__DIR__."/shared/body.php"); 
            ?>

            <?php
                /* Footer Dinâmico */
                include_once(__DIR__."/shared/footer.php"); 
            ?>
        

        <!-- Script local-->
        <script src="js/script.js"></script>
        <!-- jQuery 3.3.1 -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <!-- Plugin Bootstrap 4.0.0 -->
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--Font Awesome 5.0.6 -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    </body>
</html>