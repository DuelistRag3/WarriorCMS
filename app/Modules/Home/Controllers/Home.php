<?php

/**
 * This is Install Module Controller
 */

namespace Modules\Home\Controllers;

class Home extends \CodeIgniter\Controller
{
    public function index() {
        echo view('Modules\Home\Views\home');
    }
}
