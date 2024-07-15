<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class TestSeeder extends Seeder
{
    public function run()
    {
        $this->call('CategorySeeder');
        $this->call('VideoSeeder');
        $data = [];
        function getVideoCategory($video_id, $category_id)
        {
            return ['video_id' => $video_id, 'category_id' => $category_id,  'created_at' => Time::now(), 'updated_at' => Time::now()];
        }
        array_push($data, getVideoCategory(1, 1));
        array_push($data, getVideoCategory(3, 1));
        array_push($data, getVideoCategory(2, 2));
        array_push($data, getVideoCategory(2, 3));
        array_push($data, getVideoCategory(5, 2));
        array_push($data, getVideoCategory(5, 3));
        for ($i = 6; $i < 10; $i++) {
            array_push($data, getVideoCategory($i, 2));
        }
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 11; $i < 100; $i++) {
            array_push($data, getVideoCategory($i, $faker->numberBetween(1, 3)));
        }
        $this->db->table('video_categories')->insertBatch($data);
    }
}
