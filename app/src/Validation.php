<?php
/*
 * @author Hállex da Silva Costa <hallex.costa@hotmail.com>
 * @copyright (c) 2020 All rights reserved.
 */
namespace App\Source;

use App\Interfaces\InterfaceValidation;

/**
 * [Description]
 * class Validation
 */
class Validation implements InterfaceValidation
{
    /**
     * @var array receive post array $_POST['files']
     */
    private array $validate;
    /**
     * [validate data post receive]
     * @param  array  $datas [receive data]
     * @return array        [return data filtered]
     */
    public function validate(array $datas) : object
    {
        foreach ($datas as $data) {
            $this->validate[] = filter_var($data, FILTER_SANITIZE_STRING);
        }

        return (object)$this->validate;
    }
}
