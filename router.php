<?php

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
    '/'=>'lesson2/controller/index,php',
    '/about'=>'lesson2/controllers/about.php',
    '/notes'=>'lesson2/controllers/notes.php',
    '/contact'=>'lesson2/controllers/contact.php',
];

function routeToController($uri,$routes){
    if(array_key_exists($uri, $routes)) {
        require $routes[$uri];
    }else{
        abort();
    }
}

function abort($code=404){
    http_response_code($code);

    require "./views/{$code}.php";

    die();
}
routeToController($uri,$routes);

?>