<?php
/*
 * @author Hállex da Silva Costa <hallex.costa@hotmail.com>
 * @copyright (c) 2020 All rights reserved.
 */
namespace App\Interfaces;

/**
 * @interface InterfaceRoute
 */
interface InterfaceRoute
{
    public static function load(string $uri, array $routes) : string;
    public function add(string $uri, string $route) : void;
    public function setRoutes($routes) : void;
}
