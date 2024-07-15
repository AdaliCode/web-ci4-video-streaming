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
        // return var_dump($this->videomodel->where('category', 'Variety')->paginate(8));
        $data = [
            'title' => 'Arix',
            'videos' => $this->videomodel->where('release <=', Time::now())->orderBy('rating', 'desc')->paginate(10),
            'seriesVideos' => $this->videomodel->where('category', 'Series')->where('release <=', Time::now())->paginate(8),
            'varietyVideos' => $this->videomodel->where('category', 'Variety')->where('release <=', Time::now())->paginate(4),
            'romanceVideos' => $this->videomodel->where('category', 'Romance')->where('release <=', Time::now())->paginate(4),
            'upcomingVideos' => $this->videomodel->where('release >', Time::now())->paginate(4),
        ];
        return view('home', $data);
    }
}
