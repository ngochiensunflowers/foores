<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/7002.less', 'css/7002.css');
        ?> 
        <link href="css/7002.css" rel="stylesheet" type="text/css"/>

        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/m1-slide-js.js" type="text/javascript"></script>
        <script src="js/modul1-navi-js.js" type="text/javascript"></script>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/modul-2-js.js" type="text/javascript"></script>

    </head> 

    <body> 
        <?php include '../7002/7002-content.php'; ?>
    </body>
</html>