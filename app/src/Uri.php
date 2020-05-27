<?php
/*
 * @author Hállex da Silva Costa <hallex.costa@hotmail.com>
 * @copyright (c) 2020 All rights reserved.
 */
namespace App\Source;

use App\Interfaces\InterfaceUri;

/**
 * [Description]
 * class Uri
 */
class Uri implements InterfaceUri
{
    public static function load() : string
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}
