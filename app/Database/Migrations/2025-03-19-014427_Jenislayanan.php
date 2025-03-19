<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jenislayanan extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
			    'id_layanan'     => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true
			],
            'nama_layanan'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '150'
			],
        ]);
        $this->forge->addKey('id_layanan', TRUE);
        $this->forge->createTable('Jenislayanan', TRUE);
    }

    public function down()
    {
        //
    }
}
