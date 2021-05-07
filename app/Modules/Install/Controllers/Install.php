<?php

/**
 * This is Install Module Controller
 */

namespace Modules\Install\Controllers;

class Install extends \CodeIgniter\Controller
{
    public function index() {
        echo view('Modules\Install\Views\install');
    }
}
