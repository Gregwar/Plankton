<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="<?php echo asset('/bootstrap/css/bootstrap.min.css'); ?>" />
        <link rel="stylesheet" href="<?php echo asset('/css/style.css'); ?>" />
        <title>Plankton example</title>
    </head>
    <body>
        <?php render('header', array(), false); ?>

        <?php include(__DIR__.'/'.$page.'.php'); ?>

        <hr/>

        <footer class="text-sm">
            <small>
                Powered by <em><a href="https://github.com/Gregwar/Plankton">Plankton pico framework</a></em>
            </small>
        </footer>
    </body>
</html>
