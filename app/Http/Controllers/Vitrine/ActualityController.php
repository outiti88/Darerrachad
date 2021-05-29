<?php

namespace App\Http\Controllers\Vitrine;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActualityController extends Controller
{
    public function index()
    {
        $page_title = 'NOUVELLES & EVÉNEMENTS';
        $page_subTitle = 'Notre énergie diffusée autour du Maroc!';
        $page_link = 'Actualités';
        $page = 'news';
        return view('vitrine.news', [
            'page_title' => $page_title,
            'page_link' => $page_link,
            'page_subTitle' => $page_subTitle,
            'page' => $page
        ]);
    }
}
