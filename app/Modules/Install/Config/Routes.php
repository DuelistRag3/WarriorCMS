<?php

/**
 * Define Install Routes
 */
$routes->get('install', '\Modules\Install\Controllers\Install::index');
$routes->get('install/database', '\Modules\Install\Controllers\Install::database');
