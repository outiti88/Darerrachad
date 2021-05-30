<?php

namespace App\Http\Controllers\Vitrine;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index()
    {
        $page = 'home';
        $total = DB::table('books')->count();
        $books = DB::table('books')->where('deleted_at', NULL)->where('isFavoris', 1)->orderBy('created_at', 'DESC')->get();
        return view('vitrine.index', [
            'page' => $page,
            'books' =>$books
        ]);
    }
}
