<?php

namespace App\Models;

use CodeIgniter\Model;

class VersionModel extends Model
{
  public function __construct() {
  }

  public function getVersion() {
    return file_get_contents(APPPATH.'version.txt');
  }
}
