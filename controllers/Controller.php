<?php

$controller = 'main';
$method = 'index';
$params = [];

function splitURL()
{
    $url = isset($_GET['url']) ? $_GET['url'] : 'main';
    return explode('/', filter_var(trim($url, '/'), FILTER_SANITIZE_URL));
}


function renderApp()
{

    global $controller;
    global $method;
    global $params;
    $url = splitURL();

    if (file_exists(strtolower($url[0]) . 'Controller.php')) {
        $controller = strtolower($url[0]);
        unset($url[0]);
    }

    require $controller . 'Controller.php';

    if (isset($url[1])) {
        if (function_exists(strtolower($url[1]))) {
            $method = $url[1];
            unset($url[1]);
        }
    }

    //run the method with array params
    $params = array_values($url);
    call_user_func_array($method, $params);
}
