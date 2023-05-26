<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PeopleManagementMidYear extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
			'id_pm_mid_year'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'commitment'       => [
				'type'              => 'INT',
				'constraint'        => 10,
			],
            'delegating'       => [
				'type'              => 'INT',
				'constraint'        => 10,
			],
            'coaching'       => [
				'type'              => 'INT',
				'constraint'        => 10,
			],
            'developing'       => [
				'type'              => 'INT',
				'constraint'        => 10,
			],
            'avg_mid_year' => [
				'type'           => 'FLOAT',
                'constraint'        => 10,
			],
			'created_at' => [
				'type'           => 'DATETIME',
				'null'           => true,
			],
			'updated_at' => [
				'type'           => 'DATETIME',
				'null'           => true,
			]
		]);
		$this->forge->addPrimaryKey('id_pm_mid_year');
		$this->forge->createTable('pm_mid_year');
    }

    public function down()
    {
        //
        $this->forge->dropTable('pm_mid_year');
    }
}
