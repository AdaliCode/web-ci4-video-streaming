<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Episode extends Migration
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
            'video_id' => [
                'type'       => 'INT',
                'unsigned'   => true,
                'constraint' => 11,
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'slug' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'release' => [
                'type' => 'DATETIME',
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
        $this->forge->addForeignKey('video_id', 'videos', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('episodes');
    }

    public function down()
    {
        $this->forge->dropTable('episodes');
    }
}
