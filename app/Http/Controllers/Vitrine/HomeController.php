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
        $totalScolaire = DB::table('books')->where('category','Scolaire')->count();
        $totalEnfant = DB::table('books')->where('category','Enfant')->count();
        $totalReligieux = DB::table('books')->where('category','Religieux')->count();
        $totalAutres = DB::table('books')->where('category','Autres')->count();
        $books = DB::table('books')->where('deleted_at', NULL)->where('isFavoris', 1)->orderBy('created_at', 'DESC')->get();
        return view('vitrine.index', [
            'page' => $page,
            'books' =>$books,
            'totalScolaire' => $totalScolaire,
            'totalEnfant' => $totalEnfant,
            'totalReligieux' => $totalReligieux,
            'totalAutres' => $totalAutres


        ]);
    }
}
