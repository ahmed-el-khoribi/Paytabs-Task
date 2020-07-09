<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCategoriesTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => TRUE,
					'auto_increment' => TRUE
			],
			'title'       => [
					'type'           => 'VARCHAR',
					'constraint'     => '100',
			],
			'parent_id' => [
					'type'           => 'TEXT',
					'null'           => TRUE,
			],
	]);
	$this->forge->addKey('id', TRUE);
	$this->forge->createTable('categories');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('categories');
	}
}
