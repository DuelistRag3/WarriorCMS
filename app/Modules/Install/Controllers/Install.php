<?php

/**
 * This is Install Module Controller
 */

namespace Modules\Install\Controllers;

use App\Models\VersionModel;
use App\Models\GeneralModel;
use Arifrh\Themes\Themes;
use CodeIgniter\API\ResponseTrait;
use App\Libraries\ConfigWriter;
use Modules\Install\InstallModel;

class Install extends \CodeIgniter\Controller
{
  use ResponseTrait;
    public function __construct() {
      helper('form');

      // Theme injection
      $theme = config('installer');
      Themes::init($theme)
      ->addCSS('style.css')
      ->addExternalJS(['https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'])
      ->addExternalJS(['https://cdn.jsdelivr.net/npm/sweetalert2@10.16.7/dist/sweetalert2.all.min.js'])
      ->addJS(['dataInputs.js'])
      ->addJS(['addRealm.js'])
      ->addJS(['finishInstall.js'])
      ->addJS(['panelSlide.js']);
      // End theme injection

      // Import config writter for arrays
      $this->ConfigWriter = new ConfigWriter();

      $this->model = model('App\Modules\Install\Models\InstallModel');
      $this->version = model('App\Models\VersionModel');
    }

    public function index() {
      $data = [
        'version' => $this->version->getVersion(),
      ];

      echo view('Modules\Install\Views\install', $data);
    }

    public function saveSiteSettings() {
      if (empty($_POST['sitename'])) {
        $data = [
          'title' => 'Error!',
          'msg' => 'Please fill out website name.',
          'icon' => 'error'
        ];
        return $this->response->setJSON($data);
      } elseif (empty($_POST['discordid'])) {
        $data = [
          'title' => 'Error!',
          'msg' => 'Please fill out Discord id.',
          'icon' => 'error'
        ];
        return $this->response->setJSON($data);
      } else {
        $data = [
          'title' => 'Success!',
          'msg' => 'Website data has been Saved.',
          'icon' => 'success'
        ];
        $this->model->writeConfig($_POST['sitename'], $_POST['discordid']);
        return $this->response->setJSON($data);
      }
    }

    public function saveSiteDatabase() {
      $migrate = \Config\Services::migrations();
      if (empty($_POST['dbhostname']) or empty($_POST['dbusername']) or empty($_POST['dbpassword']) or empty($_POST['dbname'])) {
        $data = [
          'title' => 'Error!',
          'msg' => 'Please fill out all fields.',
          'icon' => 'error'
        ];
        return $this->response->setJSON($data);
      } else {
        // Write DB Config
  			// // write web db config
  			$this->ConfigWriter->write('Database', 'hostname', $_POST['dbhostname'], 'default');
  			$this->ConfigWriter->write('Database', 'username', $_POST['dbusername'], 'default');
  			$this->ConfigWriter->write('Database', 'password', $_POST['dbpassword'], 'default');
  			$this->ConfigWriter->write('Database', 'database', $_POST['dbname'], 'default');

        try
        {
          $migrate->latest();
          $data = [
            'title' => 'Success!',
            'msg' => 'Database setup completed.',
            'icon' => 'success'
          ];
        }
        catch (\Throwable $e)
        {
          $data = [
            'title' => 'Error!',
            'msg' => 'Something went wrong while Database setup',
            'icon' => 'error'
          ];
        }

        return $this->response->setJSON($data);
      }
    }

    public function addRealmDB() {
      $db = db_connect();

      $model = new GeneralModel();

      $dbpasshash = $model->hashing($_POST['rdbuser'], $_POST['rdbpass'], 'db');

      $data = [
        'name' => $_POST['rname'],
        'portal' => $_POST['rportal'],
        'dbhost' => $_POST['rdbhost'],
        'dbuser' => $_POST['rdbuser'],
        'dbpass' => $dbpasshash,
        'dbname' => $_POST['rdbname'],
        'emulator' => $_POST['remutype'],
        'bnetsup'  => $_POST['rbnetsup'],
      ];

      $builder = $db->table('realms');
      $builder->insert($data);

    }

    public function finishInstall() {
      if ($this->model->changeInstallStatus()) {
        return $response_array['status'] = 'success';
      } else {
        return false;
      }
    }
}
