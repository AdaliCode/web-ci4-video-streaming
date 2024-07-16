<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class VideoSeeder extends Seeder
{
    public function run()
    {
        $data = [];
        function getVideo($title, $release = '2024/7/10', $rating = 10)
        {
            $slug = strtolower(url_title($title, '-'));
            return ['title' => $title, 'slug' => $slug, 'release' => $release,  'rating' => $rating, 'created_at' => Time::now(), 'updated_at' => Time::now()];
        }
        array_push($data, getVideo('Mom\'s Diary'));
        array_push($data, getVideo('Lovely Runner'));
        array_push($data, getVideo('Hangout with Yoo')); // 3
        array_push($data, getVideo('One Piece'));
        array_push($data, getVideo('My Sweet Mobster', rating: 9.4));
        array_push($data, getVideo('Urban Horror', '2024/7/19'));
        array_push($data, getVideo('Fresh off the Sea', '2024/7/20'));
        array_push($data, getVideo('Dead Man', '2024/7/21'));
        array_push($data, getVideo('The Tiger', '2024/7/28'));
        array_push($data, getVideo('The King', '2024/7/28'));
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 100; $i++) {
            array_push($data, getVideo($faker->sentence(2), $faker->date('Y/m/d'), rating: $faker->randomFloat(1, 0, 10)));
        }
        $this->db->table('videos')->insertBatch($data);
    }
}
