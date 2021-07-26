<?php

namespace App\Http\Controllers\vitrine;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpecialityController extends Controller
{
    public function index()
    {
        $page_title = 'SPECIALITES';
        $page_subTitle = 'Nous sommes partout!';
        $page_link = 'sepcialite';
        $page = 'speciality';
        return view('vitrine.speciality', [
            'page_title' => $page_title,
            'page_link' => $page_link,
            'page_subTitle' => $page_subTitle,
            'page' => $page
        ]);
    }
}
