<?php

/**
 * This is Install Module Controller
 */

namespace Modules\Install\Controllers;

use Arifrh\Themes\Themes;

class Install extends \CodeIgniter\Controller
{
    public function __construct() {
      $theme = config('installer');
      Themes::init($theme)->addCSS('style.css');
    }

    public function index() {
      $data = [
        'version' => '0.1',
      ];

      echo view('Modules\Install\Views\install', $data);
    }

    public function database() {
      $data = [
        'version' => '0.1',
      ];
    }
}
