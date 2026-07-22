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
    $method = $_SERVER['REQUEST_METHOD'];

    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    $route = $this->routes[$method][$uri] ?? null;

    echo "Method : " . $method . "<br>";
    echo "URI : " . $uri . "<br><br>";

    if ($route) {
        echo "Route Found : " . $route;
    } else {
        echo "404 Not Found";
    }
}
}