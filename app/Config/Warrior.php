<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Warrior extends BaseConfig
{
  //GENERAL
  /**
  *
  * // Install Status //
  * Defines the Install status.
  * This value changes automatically depending wether the CMS installation is finished or not.
  * DO NOT TOUCH IT IF YOU DON`T KNOW WHAT YOU DO.
  * @var string
  **/
	public $installstatus = 'true';

  /**
  *
  * // Website Name //
  * Defines the website name.
  * This value changes to the given name while CMS installation.
  * Usually you match this value with your servers name.
  *
  * @var string
  **/
	public $sitename = 'WarriorCMS';

  /**
  *
  * // Discord ID //
  * Define the Discord ID.
  * This value changes to the given ID while CMS installation.
  * This value is required for the Discord widget.
  * You can find your Discord ID in your Discord server settings in the Widget section (Serverwdiget needs to be enabled).
  *
  * @var string
  **/
  public $discordid = 'DASKD';
}
