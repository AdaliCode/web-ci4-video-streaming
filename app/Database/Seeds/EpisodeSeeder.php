<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class EpisodeSeeder extends Seeder
{
    public function run()
    {
        $data = [];
        function getVideoEpisode($title, $video_id, $release = '2024/7/16', $rating = 10)
        {
            $slug = strtolower(url_title($title, '-'));
            return ['title' => $title, 'slug' => $slug, 'video_id' => $video_id, 'release' => $release,  'rating' => $rating, 'created_at' => Time::now(), 'updated_at' => Time::now()];
        }
        array_push($data, getVideoEpisode('1', 1));
        array_push($data, getVideoEpisode('251', 1));
        for ($i = 2; $i < 110; $i++) {
            array_push($data, getVideoEpisode('16', $i));
        }
        $this->db->table('episodes')->insertBatch($data);
    }
}
