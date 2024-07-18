<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\I18n\Time;

class VideoModel extends Model
{
    protected $table = 'videos';
    protected $useTimestamps = true;

    public function videoCategories($category = false, $upcoming = false)
    {
        $this->table('videos')->select(['videos.*', 'GROUP_CONCAT(DISTINCT categories.name SEPARATOR \', \') as all_categories', 'GROUP_CONCAT(DISTINCT episodes.title SEPARATOR \', \') as all_episodes_title', 'GROUP_CONCAT(DISTINCT episodes.release SEPARATOR \', \') as all_episodes_release'])->join('episodes', 'videos.id = episodes.video_id', 'inner')->join('video_categories', 'videos.id = video_categories.video_id', 'inner')->join('categories', 'categories.id = video_categories.category_id', 'inner')->groupBy('videos.title');
        // cek upcoming videos or Not
        if ($upcoming == true) {
            return $this->where('episodes.release >', Time::now())->orderBy('episodes.release');
        } else {;
            // cek apa video sesuai category apa semua
            if ($category == false) {
                return $this->where('episodes.release <=', Time::now());
            }
            return $this->where('episodes.release <=', Time::now())->where('categories.name', $category);
        }
    }
}
