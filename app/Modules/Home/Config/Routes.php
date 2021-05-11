<?php

/**
 * Define Install Routes
 */
$routes->get('home', '\Modules\Home\Controllers\Home::index',['filter' => 'install']);
