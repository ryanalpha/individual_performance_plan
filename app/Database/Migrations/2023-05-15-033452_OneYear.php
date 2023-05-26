<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class OneYear extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
			'id_one_year'          => [
				'type'           => 'INT',
				'constraint'     => 10,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'one_year_achievement' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
            ],
            'score_one_year' => [
				'type'           => 'FLOAT',
				'constraint'     => 10,
            ],
            'total_one_year' => [
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
		$this->forge->addPrimaryKey('id_one_year');
		$this->forge->createTable('one_year');
    }

    public function down()
    {
        //
        $this->forge->dropTable('one_year');
    }
}
