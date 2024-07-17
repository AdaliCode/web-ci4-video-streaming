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
        $videoAll = $this->videomodel->videoCategories();
        // foreach ($videoAll->findAll() as $key => $value) {
        //     foreach (explode(',', $value["all_episodes_release"]) as $key => $episode_release) {
        //         return var_dump($episode_release);
        //     }
        // }
        $data = [
            'title' => 'Arix',
            'top10Videos' => $videoAll->orderBy('videos.rating', 'desc')->paginate(10),
            // 'upcomingVideos' => $this->videomodel->videoCategories(comingSoon: true)->paginate(4),
            'seriesVideos' => $this->videomodel->videoCategories('Korean Dramas')->paginate(8),
            'varietyVideos' => $this->videomodel->videoCategories('Korean Variety')->paginate(4),
            'romanceVideos' => $this->videomodel->videoCategories('Romance')->paginate(4),
        ];
        return view('home', $data);
    }
}
