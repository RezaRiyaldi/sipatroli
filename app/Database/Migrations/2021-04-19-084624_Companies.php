<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Perusahaan extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 15,
				'auto_increment' => TRUE
			],
			'nama_perusahaan' => [
				'type' => 'VARCHAR',
				'constraint' => 70
			],
			'slug' => [
				'type' => 'VARCHAR',
				'constraint' => 70
			],
			'nib' => [
				'type' => 'VARCHAR',
				'constraint' => 70
			],
			'no_tlp' => [
				'type' => 'VARCHAR',
				'constraint' => 70
			],
			'cp' => [
				'type' => 'VARCHAR',
				'constraint' => 70
			],
			'kategori' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],
			'industry_id' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],
			'ket_industri' => [
				'type' => 'TEXT'
			],
			'deskripsi' => [
				'type' => 'TEXT'
			],
			'tr_kecamatan_id' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],
			'desa_id' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],
			'alamat_lengkap' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],
			'das' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],
			'foto_perusahaan' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],
			'latitude' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],
			'longitude' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],
			'website' => [
				'type' => 'VARCHAR',
				'constraint' => 30
			],
			'status_document' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],
			'kepadatan' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],
			'pengaduan' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],
			'iplc' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],
			'plb3' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],
			'tps' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],
			'izin' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],
			'tps_doc' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],
			'plb3_doc' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],
			'iplc_doc' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],
			'created_at' => [
				'type' => 'DATETIME'
			],
			'updated_at' => [
				'type' => 'DATETIME'
			]
		]);

		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('companies');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
