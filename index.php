<?php
require_once 'autoload.php';
require_once 'config/parameters.php';
require_once 'views/layout/header.php';
require_once 'views/layout/aside.php';

//DEV
require_once 'ChromePhp.php';
//DEV

if (isset($_GET['controller'])) {
    if (class_exists($_GET['controller'] . 'Controller')) {
        // ChromePhp::log(0);

        $controller_name = $_GET['controller'] . 'Controller';

        $controller = new $controller_name();

        if (isset($_GET['action'])) {
            // ChromePhp::log(1);
            if (method_exists($controller, $_GET['action'])) {
                // ChromePhp::log(2);
                $action = $_GET['action'];

                $controller->$action();
            } else {
                // ChromePhp::log(3);
                error('404 page action not found');
            }
        } elseif (!isset($_GET['action'])) {
            // ChromePhp::log(4);
            $default_action = DEFAULT_ACTION;
            $controller->$default_action;
        } else {
            // ChromePhp::log(5);
            error('404 page action not found');
        }
    } else {
        // ChromePhp::log(6);
        default_page();
    }
} elseif (!isset($_GET['controller']) && isset($_GET['action'])) {
    // ChromePhp::log(7);
    default_page();
} else {
    // ChromePhp::log(8);
    default_page();
}

function error($message)
{
    $error = new ErrorController($message);
    $error->index();
}

function default_page()
{
    $default_controller = DEFAULT_CONTROLLER;
    $default_action = DEFAULT_ACTION;
    $controller = new $default_controller();
    $controller->$default_action();
}
require_once 'views/layout/footer.php';
