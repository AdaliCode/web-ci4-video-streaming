<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class VideoSeeder extends Seeder
{
    public function run()
    {
        $data = [];
        function getVideo($title, $episode = 16, $rating = 10)
        {
            $slug = strtolower(url_title($title, '-'));
            return ['title' => $title, 'slug' => $slug, 'episode' => $episode,  'rating' => $rating, 'created_at' => Time::now(), 'updated_at' => Time::now()];
        }
        array_push($data, getVideo('Mom\'s Diary'));
        array_push($data, getVideo('Lovely Runner'));
        array_push($data, getVideo('Hangout with Yoo'));
        array_push($data, getVideo('One Piece'));
        array_push($data, getVideo('My Sweet Mobster', rating: 9.4));
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 20; $i++) {
            array_push($data, getVideo($faker->sentence(2), rating: $faker->randomFloat(1, 0, 10)));
        }
        $this->db->table('videos')->insertBatch($data);
    }
}
