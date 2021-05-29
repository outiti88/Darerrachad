<?php

namespace App\Http\Controllers\Vitrine;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $page_title = 'Services';
        $page_subTitle = 'Depuis 1985, et notre metier est de vous satisfaire!';
        $page_link = 'Nos Services';
        $page = 'service';
        return view('vitrine.service', [
            'page_title' => $page_title,
            'page_link' => $page_link,
            'page_subTitle' => $page_subTitle,
            'page' => $page
        ]);
    }
}
