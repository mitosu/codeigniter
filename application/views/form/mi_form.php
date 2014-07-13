<html>
    <head>
        <title>Mi Formulario</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $title ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/main.css">
        <script src="<?php echo base_url(); ?>js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <div class="container">
            <?php echo validation_errors(); ?>

            <?php echo form_open('form'); ?>

                 <h5>Usuario</h5>
                <input type="text" name="username" value="" size="50" />

                <h5>Contraseña</h5>
                <input type="text" name="password" value="" size="50" />

                <h5>Confirmar contraseña</h5>
                <input type="text" name="passconf" value="" size="50" />

                <h5>Email</h5>
                <input type="text" name="email" value="" size="50" />

                <div><input class="btn btn-default" type="submit" value="Enviar" /></div>

                </form>
        </div>
    </body>
</html>
