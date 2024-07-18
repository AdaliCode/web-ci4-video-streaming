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
        $data = [
            'title' => 'Arix',
            'top10Videos' => $this->videomodel->videoCategories()->orderBy('videos.rating', 'desc')->paginate(10),
            'upcomingVideos' => $this->videomodel->videoCategories(upcoming: true)->paginate(4),
            'seriesVideos' => $this->videomodel->videoCategories('Korean Dramas')->paginate(8),
            'varietyVideos' => $this->videomodel->videoCategories('Korean Variety')->paginate(4),
            'romanceVideos' => $this->videomodel->videoCategories('Romance')->paginate(4),
        ];
        return view('home', $data);
    }
}
