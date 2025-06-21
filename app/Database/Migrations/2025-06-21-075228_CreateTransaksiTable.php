<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTransaksiTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'BIGINT',
                'auto_increment' => true
            ],
            'user_id' => ['type' => 'INT'],
            'produk' => ['type' => 'VARCHAR', 'constraint' => 100],
            'game_id' => ['type' => 'VARCHAR', 'constraint' => 50],
            'nominal' => ['type' => 'VARCHAR', 'constraint' => 50],
            'harga' => ['type' => 'INT'],
            'metode' => ['type' => 'VARCHAR', 'constraint' => 20],
            'ref_id' => ['type' => 'VARCHAR', 'constraint' => 100],
            'status' => ['type' => 'VARCHAR', 'constraint' => 20, 'default' => 'Pending'],
            'created_at' => ['type' => 'DATETIME'],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('transaksi');
    }


    public function down()
    {
        //
    }
}
