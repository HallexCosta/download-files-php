<?php
/*
 * @author Hállex da Silva Costa <hallex.costa@hotmail.com>
 * @copyright (c) 2020 All rights reserved.
 */
require_once 'vendor/autoload.php';
require_once 'app/functions/helpers.php';

//Ainda não achei um jeito de como usar o bind
App\Source\Bind::bind('files', App\Models\FileBuilder\Files::get('assets/files'));
