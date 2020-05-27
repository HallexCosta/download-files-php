<?php
/*
 * @author Hállex da Silva Costa <hallex.costa@hotmail.com>
 * @copyright (c) 2020 All rights reserved.
 */

namespace App\Source;

use App\Interfaces\InterfaceBind;

/**
 * [Description]
 * class Bind
 */
class Bind implements InterfaceBind
{
    /**
     * Element Container
     * @var array $bind
     */
    private static array $bind;
    /**
     * Add new element in container
     * @param  string $key
     * @param  string $value
     * @return mixed
     */
    public static function bind($key, $value) : void
    {
        static::$bind[$key] = $value;
    }
    /**
     * Get requested element
     * @param  string $key
     * @return mixed
     */
    public static function get($key) : array
    {
        return static::$bind[$key];
    }
}
