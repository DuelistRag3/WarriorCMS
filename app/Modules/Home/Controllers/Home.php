<?php

/**
 * This is Install Module Controller
 */

namespace Modules\Home\Controllers;

use Arifrh\Themes\Themes;

class Home extends \CodeIgniter\Controller
{
    public function __construct() {
      $theme = config('default');
      Themes::init($theme)
      ->addCSS('style.css')
      ->addCSS('home.css');
    }

    public function index() {
        echo view('Modules\Home\Views\home');
    }
}
