<?php
/*
 * @author Hállex da Silva Costa <hallex.costa@hotmail.com>
 * @copyright (c) 2020 All rights reserved.
 */
namespace App\Models;

use App\Source\Bind;
use App\Traits\PersistDb;

/**
 * [Description]
 * class Model
 */
abstract class Model
{
    use PersistDb;

    protected $files;
    /**
     * Get all files
     */
    public function __construct()
    {
        $this->files = $this->files();
    }
    /**
     * [Return all files found]
     * @return array
     */
    public function all() : object
    {
        return (object)$this->files;
    }
}
