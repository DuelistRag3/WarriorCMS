<?php

/**
 * Define Install Routes
 */
$routes->get('install', '\Modules\Install\Controllers\Install::index');
$routes->get('savesitesettings', '\Modules\Install\Controllers\Install::saveSiteSettings');
