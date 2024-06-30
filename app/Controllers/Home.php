<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Aflix'
        ];
        return view('home', $data);
    }
}
