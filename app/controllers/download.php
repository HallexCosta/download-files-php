<?php
/*
 * @author Hállex da Silva Costa <hallex.costa@hotmail.com>
 * @copyright (c) 2020 All rights reserved.
 */
use App\Models\Download;
use App\Source\Validation;

if (!isset($_POST['download'])) {
    header('Location: /');
}

$download = new Download;
$validation = new Validation;

$validate = $validation->validate($_POST['files']);

$download->load($validate);

$layout->add('index');
