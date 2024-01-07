<?php

require 'Middleware/Auth.php';
require 'Middleware/Guest.php';
require 'Middleware/Middleware.php';

class Router
{
    protected $routes = [];
    public function add($uri, $method, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method,
            'middleware' => null
        ];
    }
    public function get($uri, $controller)
    {
        $this->add($uri, "GET", $controller);
    }

    public function post($uri, $controller)
    {
        $this->add($uri, "POST", $controller);
    }

    public function delete($uri, $controller)
    {
        $this->add($uri, "DELETE", $controller);
    }

    public function put($uri, $controller)
    {
        $this->add($uri, "PUT", $controller);
    }

    public function patch($uri, $controller)
    {
        $this->add($uri, "PATCH", $controller);
    }

    public function only($key)
    {
        $this->routes[array_key_last($this->routes)]['middleware'] = $key;

        return $this;
    }

    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                Middleware::resolve($route['middleware']);
                return require $route['controller'];
            }
        }

        $this->abort();
    }

    protected function abort($code = 404)
    {
        http_response_code($code);

        require "views/{$code}.php";

        die();
    }
}
