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
        // return var_dump($this->videomodel->select(['videos.*', 'GROUP_CONCAT(categories.name) as all_categories', 'GROUP_CONCAT(episodes.title) as all_episodes'])->join('video_categories', 'videos.id = video_categories.video_id', 'inner')->join('categories', 'categories.id = video_categories.category_id', 'inner')->join('episodes', 'videos.id = episodes.video_id', 'inner')->groupBy('videos.title')->findAll());
        // return var_dump($this->videomodel->select(['videos.*', 'GROUP_CONCAT(DISTINCT categories.name) as all_categories', 'GROUP_CONCAT(DISTINCT episodes.title) as all_episodes'])->join('episodes', 'videos.id = episodes.video_id', 'inner')->join('video_categories', 'videos.id = video_categories.video_id', 'inner')->join('categories', 'categories.id = video_categories.category_id', 'inner')->orderBy('videos.id')->findAll());
        // return var_dump($this->videomodel->videoCategories()->findAll());
        // return var_dump($this->videomodel->videoCategories('Korean Dramas')->findAll());
        // return var_dump($this->videomodel->episodes()->findAll());
        // return var_dump($this->videomodel->videoCategories('Korean Dramas')->findAll()[0]['title']);
        $data = [
            'title' => 'Arix',
            'top10Videos' => $this->videomodel->videoCategories()->where('videos.release <=', Time::now())->orderBy('videos.rating', 'desc')->paginate(10),
            'seriesVideos' => $this->videomodel->videoCategories('Korean Dramas')->where('videos.release <=', Time::now())->paginate(8),
            'varietyVideos' => $this->videomodel->videoCategories('Korean Variety')->where('videos.release <=', Time::now())->paginate(4),
            'romanceVideos' => $this->videomodel->videoCategories('Romance')->where('videos.release <=', Time::now())->paginate(4),
            'upcomingVideos' => $this->videomodel->videoCategories()->where('videos.release >', Time::now())->paginate(4),
        ];
        return view('home', $data);
    }
}
