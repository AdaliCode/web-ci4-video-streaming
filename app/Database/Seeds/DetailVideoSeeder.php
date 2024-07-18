<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class DetailVideoSeeder extends Seeder
{
    public function run()
    {
        $videoCategory = [];
        $videoEpisode = [];
        $getVideoCategory = fn ($video_id, $category_id) => ['video_id' => $video_id,  'category_id' => $category_id, 'created_at' => Time::now(), 'updated_at' => Time::now()];
        $getVideoEpisode = fn ($video_id, $title, $release = '2024/7/16', $rating = 10) => ['title' => $title, 'slug' => strtolower(url_title($title, '-')), 'video_id' => $video_id, 'release' => $release,  'rating' => $rating, 'created_at' => Time::now(), 'updated_at' => Time::now()];
        // ----------------------------------------------------------------------------------------
        // Variety
        array_push($videoCategory, $getVideoCategory(1, 1), $getVideoCategory(3, 1)); // variety
        array_push($videoEpisode, $getVideoEpisode(1, '1'), $getVideoEpisode(1, '2', date('Y/m/d', strtotime("2024/7/16 +1week")))); // Mom's Diary
        array_push($videoEpisode, $getVideoEpisode(3, '571'), $getVideoEpisode(3, '572', date('Y/m/d', strtotime("2024/7/16 +1week")))); // Hangout With Yoo
        // ----------------------------------------------------------------------------------------
        // Dramas
        for ($i = 6; $i <= 11; $i++) {
            array_push($videoCategory, $getVideoCategory($i, 2)); // Drama
        }
        array_push($videoEpisode, $getVideoEpisode(6, '16', '2024/7/19'));
        array_push($videoEpisode, $getVideoEpisode(7, '16', '2024/7/20'));
        array_push($videoEpisode, $getVideoEpisode(8, '16', '2024/7/21'));
        array_push($videoEpisode, $getVideoEpisode(9, '16', '2024/7/28'));
        array_push($videoEpisode, $getVideoEpisode(10, '16', '2024/7/28'));
        array_push($videoEpisode, $getVideoEpisode(11, '3', '2020/9/3'));
        for ($i = 4; $i <= 8; $i++) {
            array_push($videoEpisode, $getVideoEpisode(11, $i, date('Y/m/d', strtotime("2020/9/3 +" . $i - 3 . "week"))));
        }
        // ----------------------------------------------------------------------------------------
        // Romance Dramas
        array_push($videoCategory, $getVideoCategory(2, 2), $getVideoCategory(2, 3));
        array_push($videoCategory, $getVideoCategory(5, 2), $getVideoCategory(5, 3));
        array_push($videoEpisode, $getVideoEpisode(2, '2'));
        array_push($videoEpisode, $getVideoEpisode(5, '2'));
        // ----------------------------------------------------------------------------------------
        $this->db->table('video_categories')->insertBatch($videoCategory);
        $this->db->table('episodes')->insertBatch($videoEpisode);
    }
}
