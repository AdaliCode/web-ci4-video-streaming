<?php

namespace App\Models;

use CodeIgniter\Model;

class VideoModel extends Model
{
    protected $table = 'videos';
    protected $useTimestamps = true;

    public function videoCategories($category = false)
    {
        if ($category == false) {
            return $this->table('videos')->select(['videos.*', 'GROUP_CONCAT(categories.name) as all_categories'])->join('video_categories', 'videos.id = video_categories.video_id', 'inner')->join('categories', 'categories.id = video_categories.category_id', 'inner')->groupBy('videos.title');
        }
        return $this->table('videos')->select(['videos.*', 'GROUP_CONCAT(categories.name) as all_categories'])->join('video_categories', 'videos.id = video_categories.video_id', 'inner')->join('categories', 'categories.id = video_categories.category_id', 'inner')->where('categories.name', $category)->groupBy('videos.title');
    }
}
