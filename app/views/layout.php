<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="<?php echo asset('/bootstrap/css/bootstrap.min.css'); ?>" />
        <link rel="stylesheet" href="<?php echo asset('/css/style.css'); ?>" />
        <title>Plankton example</title>
    </head>
    <body>
        <div class="page-header">
            <h1>Plankton demo</h1>
            <nav class="navbar navbar-inverse" role="navigation">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo path(); ?>">Home</a></li>
                    <li><a href="<?php echo path('hello'); ?>">Hello</a></li>
                    <li><a href="<?php echo path('films'); ?>">Films</a></li>
                </ul>

                <div class="navbar-header pull-right">
                    <a class="navbar-brand" href="https://github.com/Gregwar/Plankton">Plankton</a>
                </div>
            </nav>
        </div>

        <?php include(__DIR__.'/'.$page.'.php'); ?>

        <hr/>

        <footer class="text-sm">
            <small>
                Powered by <em><a href="https://github.com/Gregwar/Plankton">Plankton pico framework</a></em>
            </small>
        </footer>
    </body>
</html>
