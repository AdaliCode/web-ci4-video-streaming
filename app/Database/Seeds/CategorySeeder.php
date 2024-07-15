<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $data = [];
        function getCategory($name)
        {
            $slug = strtolower(url_title($name, '-'));
            return ['name' => $name, 'slug' => $slug, 'created_at' => Time::now(), 'updated_at' => Time::now()];
        }
        array_push($data, getCategory('Korean Variety'));
        array_push($data, getCategory('Korean Dramas'));
        array_push($data, getCategory('Romance'));
        $this->db->table('categories')->insertBatch($data);
    }
}
