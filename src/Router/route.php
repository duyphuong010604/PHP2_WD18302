<?php


class Route
{
    protected array $routes;

    public function register(string $route, callable|array $action): self
    {
        $this->routes[$route] = $action;
        return $this;
    }
}

$route = new Route();
$route->register(
    '/',
    function () {
        echo "Home page";
    }
);