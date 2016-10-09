<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Alter_products_table extends CI_Migration {

	public function up() {
		$this->dbforge->drop_table('products');
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'unsigned' => TRUE,
				'auto_increment' => TRUE,
			),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => '12',
			),
			'price' => array(
				'type' => 'INT',
				'unsigned' => TRUE,
			),
			'make' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('products');
	}

	public function down() {
		$this->dbforge->drop_table('products');
	}
}