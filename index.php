<?php
require("functions.php");

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


//if ($uri === "/learning-php/lesson2/controllers/" || $uri === "/learning-php/lesson2/controllers/index.php") {
//    require "./controllers/index.php";
//} else if ($uri === "/learning-php/lesson2/controllers/about.php") {
//    require './controllers/about.php';
//} else if ($uri === "/learning-php/lesson2/controllers/contact.php") {
//    require './controllers/contact.php';
//} else {
//    // Optionally handle 404 Not Found
//    echo "Page not found";
//}


$routes = [
    '/'=>'controllers/index.php',
    '/about'=>'controllers/about.php',
    '/contact'=>'controllers/contact.php',
];

if(array_key_exists($uri, $routes)) {
    require $routes[$uri];
}else{
    http_response_code(404);

    echo "404 Not Found";

    die();
}