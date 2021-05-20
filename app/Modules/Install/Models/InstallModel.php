<?php

namespace App\Modules\Install\Models;

use CodeIgniter\Model;

class InstallModel extends Model
{

  function writeConfig($sitename, $discordid) {
    // write database.php
    $data_db = file_get_contents(APPPATH.'Config/Warrior.php');
    // session_start();
    $temporary = str_replace("%SITENAME%", $sitename,   $data_db);
    $temporary = str_replace("%DISCORDID%", $discordid, $temporary);
    // Write the new database.php file
    $output_path = APPPATH.'/Config/Warrior.php';
    $handle = fopen($output_path,'w+');
    // Verify file permissions
    if(is_writable($output_path)) {
        // Write the file
        if(fwrite($handle,$temporary)) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
  }

  function changeInstallStatus() {
    // write database.php
    $data_db = file_get_contents(APPPATH.'Config/warrior.php');
    // session_start();
    $temporary = str_replace("%FALSE%", 'true',   $data_db);
    // Write the new database.php file
    $output_path = APPPATH.'/Config/warrior.php';
    $handle = fopen($output_path,'w+');
    // Verify file permissions
    if(is_writable($output_path)) {
        // Write the file
        if(fwrite($handle,$temporary)) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
  }
}
