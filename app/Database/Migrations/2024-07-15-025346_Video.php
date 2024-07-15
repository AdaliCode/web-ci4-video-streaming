<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Video extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'slug' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'unique'     => true
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'episode' => [
                'type' => 'INT',
            ],
            'rating' => [
                'type' => 'FLOAT',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('videos');
    }

    public function down()
    {
        $this->forge->dropTable('videos');
    }
}
