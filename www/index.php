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

        <!--Bootstrap Plugin 3.3.7-->
        <link rel="stylesheet" href="vendor/bootstrap-3.3.7-dist/css/bootstrap.min.css">

    </head>
    <body>

        <?php
            /* Nav Dinâmico */
            include_once(__DIR__."/shared/nav.php"); 
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

        <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Plugin Bootstrap 3.3.7-->
        <script src="vendor/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    </body>
</html>