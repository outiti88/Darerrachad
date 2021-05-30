<?php

namespace App\Http\Controllers\Vitrine;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index()
    {
        $data = null;
        $page_title = 'LIVRES & COLLECTIONS';
        $page_subTitle = 'Wikipédia Marocaine';
        $page_link = 'Nos Livres';
        $total = DB::table('books')->count();
        $books = DB::table('books')->where('deleted_at', NULL)->orderBy('created_at', 'DESC')->paginate(6);
        $page = 'book';



        return view('vitrine.book.index', [
            'books' => $books,
            'total' => $total,
            'page_title' => $page_title,
            'page_link' => $page_link,
            'page_subTitle' => $page_subTitle,
            'page' => $page,
            'data'=> $data
        ]);
    }

    public function getFreeBooks()
    {
        $page_title = 'Livres Gratuits';
        $page_subTitle = 'Téléchargez votre livre gratuitement';
        $page_link = 'Nos Livres Gratuits';
        $total = DB::table('books')->count();
        $books = DB::table('books')->where('deleted_at', NULL)->where('isFree', 1)->orderBy('created_at', 'DESC')->paginate(3);
        $page = 'freeBooks';


        return view('vitrine.book.free', [
            'books' => $books,
            'total' => $total,
            'page_title' => $page_title,
            'page_link' => $page_link,
            'page_subTitle' => $page_subTitle,
            'page' => $page

        ]);
    }

    
    public function filter(Request $request)
    {
        $data = $request->all();

        $page_title = 'LIVRES & COLLECTIONS';
        $page_subTitle = 'Wikipédia Marocaine';
        $page_link = 'Nos Livres';
        $page = 'book';

        $books = DB::table('books')->where('deleted_at', NULL); //->orderBy('created_at', 'DESC')->paginate(3);

        if ($request->filled('category')) {
            $books->where('category', $request->category);
        }

        $total = $books->count();
        $books = $books->paginate(6);

        return view('vitrine.book.index', [
            'books' => $books,
            'total' => $total,
            'page_title' => $page_title,
            'page_link' => $page_link,
            'page_subTitle' => $page_subTitle,
            'page' => $page,
            'data'=> $data
        ]);
    }

    public function search(Request $request)
    {
        $data = $request->all();

        $page_title = 'LIVRES & COLLECTIONS';
        $page_subTitle = 'Wikipédia Marocaine';
        $page_link = 'Nos Livres';
        $page = 'book';

        $books = DB::table('books')->where('deleted_at', NULL); //->orderBy('created_at', 'DESC')->paginate(3);

        if ($request->filled('keywords')) {
            $books->where('name', 'like' , '%'.$request->keywords.'%');
        }

        $total = $books->count();
        $books = $books->paginate(6);

        return view('vitrine.book.index', [
            'books' => $books,
            'total' => $total,
            'page_title' => $page_title,
            'page_link' => $page_link,
            'page_subTitle' => $page_subTitle,
            'page' => $page,
            'data'=> $data
        ]);
    }
}
