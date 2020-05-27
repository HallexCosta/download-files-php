<?php
/*
 * @author Hállex da Silva Costa <hallex.costa@hotmail.com>
 * @copyright (c) 2020 All rights reserved.
 */
namespace App\Interfaces;

/**
 * @interface InterfaceBind
 */
interface InterfaceBind
{
    public static function bind($key, $value) : void;
    public static function get($key) : array;
}
