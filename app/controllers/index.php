<?php
/*
 * @author Hállex da Silva Costa <hallex.costa@hotmail.com>
 * @copyright (c) 2020 All rights reserved.
 */

use App\Models\Download;
use App\Source\Validation;

$download = new Download;

$files = $download->all();

$layout->add('home');
