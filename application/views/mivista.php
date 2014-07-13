<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="Aplicación para Gestión de Gymnasio">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <title><?php echo $titulo ?></title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1><?php echo $titulo ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <blockquote><p><strong><?php echo $descripcion ?></strong></p></blockquote>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <?php echo $cuerpo ?>
                </div>
                <div class="col-lg-4">
                    <?php echo $cuerpo?>
                </div>
                <div class="col-lg-4">
                    <?php echo $cuerpo?>
                </div>
            </div>
        </div>
    </body>
</html>