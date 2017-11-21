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
        $less->compileFile('less/7006.less', 'css/7006.css');
        ?> 
        <link href="css/7006.css" rel="stylesheet" type="text/css"/>


        <script src="js/m1-slide-js.js" type="text/javascript"></script>
        <script src="js/modul1-navi-js.js" type="text/javascript"></script>
        <script src="JS/m1-slide-js_1.js" type="text/javascript"></script>
        <script src="JS/jquery.min.js" type="text/javascript"></script>
    </head> 

    <body> 
        <?php include '../7006/7006-content.php'; ?>
    </body>
</html>