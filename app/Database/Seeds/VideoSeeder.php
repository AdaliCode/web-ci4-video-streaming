<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class VideoSeeder extends Seeder
{
    public function run()
    {
        $data = [];
        function getVideo($title, $rating = 10)
        {
            $slug = strtolower(url_title($title, '-'));
            return ['title' => $title, 'slug' => $slug, 'rating' => $rating, 'created_at' => Time::now(), 'updated_at' => Time::now()];
        }
        array_push($data, getVideo('Mom\'s Diary'));
        array_push($data, getVideo('Lovely Runner'));
        array_push($data, getVideo('Hangout with Yoo')); // 3
        array_push($data, getVideo('One Piece'));
        array_push($data, getVideo('My Sweet Mobster', rating: 9.4));
        array_push($data, getVideo('Urban Horror'));
        array_push($data, getVideo('Fresh off the Sea'));
        array_push($data, getVideo('Dead Man'));
        array_push($data, getVideo('The Tiger'));
        array_push($data, getVideo('The King'));
        $this->db->table('videos')->insertBatch($data);
    }
}
