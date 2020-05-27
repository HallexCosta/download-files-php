<?php
/*
 * @author Hállex da Silva Costa <hallex.costa@hotmail.com>
 * @copyright (c) 2020 All rights reserved.
 */
namespace App\Interfaces;

/**
 * @interface InterfaceValidation
 */
interface InterfaceValidation
{
    public function validate(array $datas) : object;
}
