<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MidYear extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
			'id_mid_year'          => [
				'type'           => 'INT',
				'constraint'     => 10,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'mid_year_achievement' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
            ],
            'score_mid_year' => [
				'type'           => 'FLOAT',
				'constraint'     => 10,
            ],
            'total_mid_year' => [
				'type'           => 'FLOAT',
				'constraint'     => 10,
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
		$this->forge->addPrimaryKey('id_mid_year');
		$this->forge->createTable('mid_year');
    }

    public function down()
    {
        //
        $this->forge->dropTable('mid_year');
    }
}
