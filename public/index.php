<?php
declare(strict_types=1);
/*
 * @author Hállex da Silva Costa <hallex.costa@hotmail.com>
 * @copyright (c) 2020 All rights reserved.
 */
require_once '../bootstrap.php';

use App\Source\Layout;
use App\Source\Route;
use App\Source\Uri;

$routes = [
    '/'         => 'controllers/index',
    '/download' => 'controllers/download'
];

$uri = Uri::load();
$layout = new Layout;

require_once Route::load($uri, $routes);
require_once Layout::master('layout');
