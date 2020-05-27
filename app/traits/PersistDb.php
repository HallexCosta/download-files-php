<?php
/*
 * @author Hállex da Silva Costa <hallex.costa@hotmail.com>
 * @copyright (c) 2020 All rights reserved.
 */
namespace App\Traits;

use App\Source\Bind;

trait PersistDb
{
    protected function files()
    {
        return $this->filter(Bind::get('files'));
    }
    private function filter(array $files) : array
    {
        return preg_grep("/^\./", $files, PREG_GREP_INVERT);
    }
}
