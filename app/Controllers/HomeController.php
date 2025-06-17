<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Beranda - Reynra Store'
        ];
        return view('home', $data);
    }
}
