<?php
session_start();

function show($item) {
    echo '<pre>';
    print_r($item);
    echo '</pre>';
}