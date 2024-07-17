<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class TestSeeder extends Seeder
{
    public function run()
    {
        $this->call("VideoSeeder");
        // ===========================================================================================================
        // category
        $category = [];
        $getCategory = fn ($name) => ['name' => $name, 'slug' => strtolower(url_title($name, '-')), 'created_at' => Time::now(), 'updated_at' => Time::now()];
        array_push($category, $getCategory('Korean Variety'), $getCategory('Korean Dramas'), $getCategory('Romance'));
        $this->db->table('categories')->insertBatch($category);
        // ===========================================================================================================
        $this->call("DetailVideoSeeder");
    }
}
