<?php

/**
 * Define Install Routes
 */
$routes->get('install', '\Modules\Install\Controllers\Install::index');
$routes->post('savesitesettings', '\Modules\Install\Controllers\Install::saveSiteSettings');
