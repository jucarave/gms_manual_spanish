<?php require("config.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="keywords" content="online documentation, web online help, web help, chm2web">
        <meta http-equiv="Content-Style-Type" content="text/css">

        <title>GameMaker: Studio Manual Español</title>
        
        <meta http-equiv="X-UA-Compatible" content="IE=9">
        <link rel="stylesheet" href="<?php echo $cp; ?>/css/cgm.css" type="text/css">
    </head>
    
    <body>
        <div id="wrapper_border">
            <div id="wrapper">
                <?php
                    $page = $_GET["page"];
                    if (!$page){ $page = 'index'; }
                    
                    if (file_exists($page . '.html')){
                        require($page . '.html');
                    }
                ?>
            </div>
        </div>
    </body>
</html>