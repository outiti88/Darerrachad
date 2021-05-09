<?php

namespace App\Http\Controllers;

use App\Book;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = [];
        $total = DB::table('books')->count();
        $books = DB::table('books')->where('deleted_at', NULL)->orderBy('created_at', 'DESC')->get();
        foreach ($books as $book) {
            if (!empty(User::find($book->user_id)))
                $users[] =  User::find($book->user_id);
        }

        return view('book.index', [
            'books' => $books,
            'total' => $total,
            'users' => $users
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new Book();
        $currentUser = Auth::user();
        $book->name = $request->name;
        $book->type = $request->type;
        $book->edition = $request->edition;
        $book->theme = $request->theme;
        $book->format = $request->format;
        $book->paper = $request->paper;
        $book->abstract = $request->abstract;
        $book->category = $request->category;
        $book->code = substr($book->name, -strlen($book->name), 3) . "-" . date("md-is");
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/produit/', $filename);
            $book->image = '/uploads/produit/' . $filename;
        } else {
            $book->image =  'http://darerrachad.com/assets/img/logo/logo.png';
        }
        $book->user()->associate($currentUser)->save();
        $request->session()->flash('bookAdded', $book->name);

        return redirect()->route('book.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {

        $book = Book::find($id);
        $book->name = $request->name;
        $book->type = $request->type;
        $book->edition = $request->edition;
        $book->theme = $request->theme;
        $book->format = $request->format;
        $book->paper = $request->paper;
        $book->abstract = $request->abstract;
        $book->category = $request->category;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/produit/', $filename);
            $book->image = '/uploads/produit/' . $filename;
        }
        $book->save();
        $request->session()->flash('bookUpdated', $book->name);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $book = DB::table('books')->where('id', $id)->first();
        \App\Book::destroy($book->id);
        $request->session()->flash('bookDeleted', $book->name);

        return back();
    }
}
