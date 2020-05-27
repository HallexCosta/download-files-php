<?php
/*
 * @author Hállex da Silva Costa <hallex.costa@hotmail.com>
 * @copyright (c) 2020 All rights reserved.
 */
namespace App\Models\FileBuilder;

/**
 * [Description]
 * class Files
 */
class Files
{
    /**
     * Get files using Directory
     * @param  string $dir
     * @return array
     */
    public static function get($dir) : array
    {
        return scandir($dir);
    }
}
