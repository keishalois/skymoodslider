<?php
$controllers = array('pages' => ['homepage', 'error'],
                     'programme' => ['view', 'addProgrammes'],
                    );

function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) {
        case 'pages':
            $controller = new PagesController();
        break;
        default:
        require_once("models/{$controller}.php");
        $controllerClassName = $controller . 'Controller';
        $controller = new $controllerClassName();
        break;
    }
    $controller->{ $action }();
  }

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    }
  }