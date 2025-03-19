<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Unitkerja extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
			'id_unitkerja'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true
			],
            'nama_unitkerja'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '150'
			],
            'kepala_unitkerja'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '150'
			],
        ]);
        $this->forge->addKey('id_unitkerja', TRUE);
        $this->forge->createTable('unitkerja', TRUE);
    }

    public function down()
    {
        //
    }
}