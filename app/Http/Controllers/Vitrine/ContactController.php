<?php

namespace App\Http\Controllers\Vitrine;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lead;
use App\Book;


class ContactController extends Controller
{
    public function index()
    {
        $page_title = 'A VOTRE DISPOSITION';
        $page_subTitle = 'La Satisfaction Client, Notre priorité';
        $page_link = 'Contact';
        $page = 'contact';
        return view('vitrine.contact', [
            'page_title' => $page_title,
            'page_link' => $page_link,
            'page_subTitle' => $page_subTitle,
            'page' => $page
        ]);
    }

    public function store(Request $request){
        $lead = new Lead();

        $lead->firstName = $request->firstName;
        $lead->lastName = $request->lastName;
        $lead->email = $request->email;
        $lead->phone = $request->phone;
        $lead->adresse = $request->adresse;
        $lead->status = 'nouveau';
        $lead->save();

        $book = Book::find($request->freeBookToSend);


        $details =[
            'book' => $book ,
            'user' => $lead
        ];

      \Mail::to($lead->email)->send(new \App\Mail\PdfGenerate($details , "pdf"));


        $request->session()->flash('bonkSent', $lead->email);

        return redirect()->route('vitrine.book.index');


    }
}
