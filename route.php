<?php 
    // $uri = $_SERVER['REQUEST_URI'];
    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
    
    $routes = [
        '/' => './controller/HomePageController.php',
        '/about' => './controller/AboutController.php',
        '/contact' => './controller/ContactController.php',
        '/notes' => './controller/NotesController.php',
        '/note' => './controller/NoteController.php'
    ];
    function routeToController($uri, $routes)
    {
        $controller = array_key_exists($uri,$routes)? $routes[$uri]:null;
        $controller = $controller?  require($controller):abort();

    }

    routeToController($uri, $routes);