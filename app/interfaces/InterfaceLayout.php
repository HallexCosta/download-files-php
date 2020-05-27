<?php
/*
 * @author Hállex da Silva Costa <hallex.costa@hotmail.com>
 * @copyright (c) 2020 All rights reserved.
 */
namespace App\Interfaces;

/**
 * @interface InterfaceLayout
 */
interface InterfaceLayout
{
    public static function master($layout) : string;
    public function add(string $view);
    public function load() : string ;
}
