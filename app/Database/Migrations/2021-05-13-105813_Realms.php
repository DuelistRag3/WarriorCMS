<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Realms extends Migration
{
	public function up()
	{
		// Creates the table for Realms
		$this->forge->addField([
			'realm_id'	=> [
				'type'						=> 'INT',
				'constraint'			=> 2,
				'unsigned'				=> true,
				'auto_increment'	=> true,
			],
			'name'			=> [
				'type'						=> 'VARCHAR',
				'constraint'			=> 100,
			],
			'portal'		=> [
				'type'						=> 'VARCHAR',
				'constraint'			=> 50,
			],
			'dbhost'		=> [
				'type'						=> 'VARCHAR',
				'constraint'			=> 15,
			],
			'dbuser'		=> [
				'type'						=> 'VARCHAR',
				'constraint'			=> 25,
			],
			'dbpass'		=> [
				'type'						=> 'VARCHAR',
				'constraint'			=> 255,
			],
			'dbauthname'		=> [
				'type'						=> 'VARCHAR',
				'constraint'			=> 25,
			],
			'dbcharname'		=> [
				'type'						=> 'VARCHAR',
				'constraint'			=> 25,
			],
			'emulator'		=> [
				'type'						=> 'VARCHAR',
				'constraint'			=> 25,
			],
			'bnetsup'		=> [
				'type'						=> 'VARCHAR',
				'constraint'			=> 25,
			],
		]);
		$this->forge->addKey('realm_id', true);
		$this->forge->createTable('realms');
	}

	public function down()
	{
		// Deletes Realms Table
		$this->forge->dropTable('realms');
	}
}
