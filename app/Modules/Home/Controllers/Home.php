<?php

/**
 * This is Install Module Controller
 */

namespace Modules\Home\Controllers;

use Modules\Home\HomeModel;
use Arifrh\Themes\Themes;

class Home extends \CodeIgniter\Controller
{
    public function __construct() {
      $theme = config('default');
      Themes::init($theme)
      ->addCSS('style.css')
      ->addCSS('home.css');

      $this->model = model('App\Modules\Home\Models\HomeModel');
    }

    public function index() {

      $data = [
        'model' => $this->model
      ];
      echo view('Modules\Home\Views\home', $data);
    }
}
