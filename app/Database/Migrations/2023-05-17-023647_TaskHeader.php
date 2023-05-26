<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TaskHeader extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id_task_header'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'name_employee'       => [
				'type'              => 'ENUM',
				'constraint'        => "'Ersha Nuranjasari','Ratri Cahyaningsih','Etika'",
			],
            'department'       => [
				'type'              => 'ENUM',
				'constraint'        => "'HRD','Finance','Operational'",
			],
            'division'       => [
				'type'              => 'ENUM',
				'constraint'        => "'Administration','General Affair','Technician','Accountant','Legal'",
			],
            'company'       => [
				'type'              => 'ENUM',
				'constraint'        => "'PT Century Battery Indonesia'",
			],
            'date_review' => [
				'type'           => 'DATE',
				'null'           => true,
			],
            'supervisor_employee'       => [
				'type'              => 'ENUM',
				'constraint'        => "'Ersha Nuranjasari','Ratri Cahyaningsih','Etika'",
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
		$this->forge->addPrimaryKey('id_task_header');
		$this->forge->createTable('task_header');
    }

    public function down()
    {
        $this->forge->dropTable('task_header');
    }
}
