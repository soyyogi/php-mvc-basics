<?php

$controller = 'main';
$method = 'index';
$params = [];

function splitURL() {
    $url = isset($_GET['url']) ? $_GET['url'] : 'main';
    return explode('/', filter_var(trim($url,'/'),FILTER_SANITIZE_URL));
}

$url = splitURL();
