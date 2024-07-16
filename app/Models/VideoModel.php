<?php

namespace App\Models;

use CodeIgniter\Model;

class VideoModel extends Model
{
    protected $table = 'videos';
    protected $useTimestamps = true;

    public function videoCategories($category = false)
    {
        $this->table('videos')->select(['videos.*', 'GROUP_CONCAT(DISTINCT categories.name) as all_categories', 'GROUP_CONCAT(DISTINCT episodes.title) as all_episodes'])->join('episodes', 'videos.id = episodes.video_id', 'inner')->join('video_categories', 'videos.id = video_categories.video_id', 'inner')->join('categories', 'categories.id = video_categories.category_id', 'inner');
        // $this->table('videos')->select(['videos.*', 'GROUP_CONCAT(categories.name) as all_categories'])->join('video_categories', 'videos.id = video_categories.video_id', 'inner')->join('categories', 'categories.id = video_categories.category_id', 'inner');
        if ($category == false) {
            return $this->groupBy('videos.title');
        }
        return $this->where('categories.name', $category)->groupBy('videos.title');
    }
}
