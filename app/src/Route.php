<?php
/*
 * @author Hállex da Silva Costa <hallex.costa@hotmail.com>
 * @copyright (c) 2020 All rights reserved.
 */
namespace App\Source;

use App\Interfaces\InterfaceRoute;
use InvalidArgumentException;

/**
 * [Description]
 * class Route
 */
class Route implements InterfaceRoute
{
    private array $routes = [];
    public static function load(string $uri, array $routes) : string
    {
        if (!array_key_exists($uri, $routes)) {
            throw new InvalidArgumentException(
                sprintf(
                    'The route "%s" is invalid.',
                    $uri
                )
            );
        }
        return "../app/{$routes[$uri]}.php";
    }
    public function add(string $uri, string $route) : void
    {
        $this->routes[$uri] = $route;
    }
    public function setRoutes($routes) : void
    {
        $this->routes = $routes;
    }
}
