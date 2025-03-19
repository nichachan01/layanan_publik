<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Jenislayanan extends Seeder
{
    public function run()
    {
        //
        $news_data = [
			[
				'id_layanan' => 1,
				'nama_layanan'  => 'Layanan Rekomendasi',
			],
            [
				'id_layanan' => 2,
				'nama_layanan'  => 'Layanan Keagamaan',
			],
            [
				'id_layanan' => 3,
				'nama_layanan'  => 'Layanan Perizinan',
			],
            [
				'id_layanan' => 4,
				'nama_layanan'  => 'Layanan Konsultasi',
			],
        ];
        foreach($news_data as $data){
			// insert semua data ke tabel
			$this->db->table('jenislayanan')->insert($data);
		}
    }
}