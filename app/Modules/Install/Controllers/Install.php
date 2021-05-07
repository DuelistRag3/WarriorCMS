<?php

/**
 * This is Install Module Controller
 */

namespace Modules\Install\Controllers;

class Install extends \CodeIgniter\Controller
{
    public function __construct() {
    }

    public function index() {
      $data = [
        'version' => '0.1',
      ];

      echo view('Modules\Install\Views\start', $data);
    }
}
