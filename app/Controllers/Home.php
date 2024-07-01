<?php

namespace App\Controllers;

use App\Models\VideoModel;

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
            'videos' => $this->videomodel->findAll()
        ];
        return view('home', $data);
    }
}
