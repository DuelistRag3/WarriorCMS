<?php

/**
 * Define Install Routes
 */
$routes->get('install', '\Modules\Install\Controllers\Install::index');
$routes->post('savesitesettings', '\Modules\Install\Controllers\Install::saveSiteSettings');
$routes->post('savesitedatabase', '\Modules\Install\Controllers\Install::saveSiteDatabase');
$routes->post('addrealmdb', '\Modules\Install\Controllers\Install::addRealmDB');
$routes->post('finishinstall', '\Modules\Install\Controllers\Install::finishInstall');
