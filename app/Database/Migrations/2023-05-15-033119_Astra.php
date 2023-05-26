<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Astra extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
			'id_task'          => [
				'type'           => 'INT',
				'constraint'     => 10,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'id_mid_year'          => [
				'type'           => 'INT',
				'constraint'     => 10,
				'unsigned'       => true,
			],
			'id_one_year'          => [
				'type'           => 'INT',
				'constraint'     => 10,
				'unsigned'       => true,
			],
			'program'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'weight' => [
				'type'           => 'FLOAT',
				'constraint'     => 10,
			],
			'target_mid_year' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'target_one_year' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
            ],
            'due_date' => [
				'type'           => 'DATE',
				'null'           => true,
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
		$this->forge->addPrimaryKey('id_task');
		$this->forge->createTable('meta_task');
    }

    public function down()
    {
        //
        $this->forge->dropTable('meta_task');
    }
}
