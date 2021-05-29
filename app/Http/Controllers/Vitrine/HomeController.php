<?php

namespace App\Http\Controllers\Vitrine;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $page = 'home';
        return view('vitrine.index', [
            'page' => $page
        ]);
    }
}
