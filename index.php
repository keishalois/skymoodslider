<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sky Moodslider</title>
    </head>
    <body>
        <?php        
    if (isset($_GET['controller']) && isset($_GET['action'])) {
        $controller = $_GET['controller'];
        $action     = $_GET['action'];
        require_once('views/progslayout.php'); 
  } else {
        $controller = 'pages';
        $action     = 'homepage';
        require_once('views/layout.php'); 
  }
        ?>
    </body>
</html>