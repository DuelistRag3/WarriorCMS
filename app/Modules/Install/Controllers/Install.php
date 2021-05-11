<?php

/**
 * This is Install Module Controller
 */

namespace Modules\Install\Controllers;

use Arifrh\Themes\Themes;

class Install extends \CodeIgniter\Controller
{
    public function __construct() {
      helper('form');
      $theme = config('installer');
      Themes::init($theme)
      ->addCSS('style.css')
      ->addExternalJS(['https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'])
      ->addExternalJS(['https://cdn.jsdelivr.net/npm/sweetalert2@10.16.7/dist/sweetalert2.all.min.js'])
      ->addJS(['dataInputs.js'])
      ->addJS(['panelSlide.js']);
    }

    public function index() {
      $data = [
        'version' => '0.1',
      ];

      echo view('Modules\Install\Views\install', $data);
    }

    public function saveSiteSettings() {
      echo "TEST";
    }

    public function saveSiteDatabase($dbhost, $dbuser, $dbpw, $dbname) {

    }
}
