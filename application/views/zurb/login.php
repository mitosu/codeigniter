<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo $title ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/foundation.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/main.css"/>
    <script src="<?php echo base_url(); ?>js/vendor/modernizr.js" type="text/javascript"></script>
</head>
<body>

    <div class="row">
        <div class="large-4 columns"></div>
        <div class="large-4 columns">
            <form data-abide class="form-signin">
                <div class="name-field">
                    <label>Usuario <small>requerido</small>
                        <input type="text" required pattern="[a-zA-Z]+">
                    </label>
                    <small class="error">El nombre es necesario y debe ser texto.</small>
                </div>
                <div class="email-field">
                    <label>Email <small>requerido</small>
                        <input type="email" required>
                    </label>
                    <small class="error">An email address is required.</small>
                </div>
                <button type="submit" class="button">Log in Control Panel RockAppRoll</button>
            </form>
        </div>
        <div class="large-4 columns"></div>
    </div>

    <script src="<?php echo base_url(); ?>js/vendor/jquery.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>/js/vendor/fastclick.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>/js/foundation.min.js"></script>

    <script>
        $(document).foundation();
    </script>
</body>
</html>