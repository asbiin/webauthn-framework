<?php

declare(strict_types=1);

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2014-2018 Spomky-Labs
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;
use Webauthn\SecurityBundle\Tests\Functional\AdminController;
use Webauthn\SecurityBundle\Tests\Functional\HomeController;
use Webauthn\SecurityBundle\Tests\Functional\SecurityController;

$routes = new RouteCollection();

// Security
$routes->add('app_login_options', new Route('/login/options', [
    '_controller' => [SecurityController::class, 'options'],
], [], [], null, [], ['POST']));
$routes->add('app_login_assertion', new Route('/login/assertion', [
    '_controller' => [SecurityController::class, 'assertion'],
], [], [], null, [], ['POST']));

$routes->add('app_logout', new Route('/logout', [
    '_controller' => [SecurityController::class, 'logout'],
]));

// Home
$routes->add('app_home', new Route('/', [
    '_controller' => [HomeController::class, 'home'],
]));

// Admin
$routes->add('app_admin', new Route('/admin', [
    '_controller' => [AdminController::class, 'admin'],
]));

return $routes;
