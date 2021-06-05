<?php

namespace App\Modules\Home\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{

  public function __construct() {
  }

  function getAllRealms() {
    $db = db_connect();
    $realmtable = $db->table('realms');
    $query = $realmtable->get();

    foreach ($query->getResult() as $row)
    {
      return $row->name;
    }
  }
}
