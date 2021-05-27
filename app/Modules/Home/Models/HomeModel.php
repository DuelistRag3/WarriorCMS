<?php

namespace App\Modules\Home\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{

  public function __construct() {
    $db = db_connect();
  }

  function getRealms() {
    $realmtable = $db->table('realms');
    $query = $builder->get();

    foreach ($query->getResults() as $row)
    {
      return $row->name;
    }
  }
}
