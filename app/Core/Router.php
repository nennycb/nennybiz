<?php

class Router
{
    private $routes = [];

    public function get($uri, $action)
    {
        $this->routes['GET'][$uri] = $action;
    }

    public function post($uri, $action)
    {
        $this->routes['POST'][$uri] = $action;
    }

    public function dispatch()
    {
    $requestMethod = $_SERVER['REQUEST_METHOD'];
    $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    $route = $this->routes[$requestMethod][$requestUri] ?? null;

    if (!$route) {
        http_response_code(404);
        die("404 Not Found");
    }
    list($controller, $method) = explode('@', $route);

    require __DIR__ . '/../Controllers/' . $controller . '.php';

    $controller = new $controller();

    $controller->$method();
    
    }

    
}