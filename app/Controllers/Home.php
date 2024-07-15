<?php

namespace App\Controllers;

use App\Models\VideoModel;
use CodeIgniter\I18n\Time;

class Home extends BaseController
{
    protected $videomodel;
    public function __construct()
    {
        $this->videomodel = new VideoModel();
    }
    public function index()
    {
        // return var_dump($this->videomodel->select(['videos.*', 'GROUP_CONCAT(categories.name) as all_categories'])->join('video_categories', 'videos.id = video_categories.video_id', 'inner')->join('categories', 'categories.id = video_categories.category_id', 'inner')->groupBy('videos.title')->where('categories.name', 'Korean Dramas')->paginate(8));

        $data = [
            'title' => 'Arix',
            'top10Videos' => $this->videomodel->videoCategories()->where('release <=', Time::now())->orderBy('rating', 'desc')->paginate(10),
            'seriesVideos' => $this->videomodel->videoCategories('Korean Dramas')->where('release <=', Time::now())->paginate(8),
            'varietyVideos' => $this->videomodel->videoCategories('Korean Variety')->where('release <=', Time::now())->paginate(4),
            'romanceVideos' => $this->videomodel->videoCategories('Romance')->where('release <=', Time::now())->paginate(4),
            'upcomingVideos' => $this->videomodel->videoCategories()->where('release >', Time::now())->paginate(4),
        ];
        return view('home', $data);
    }
}
