<?php

namespace App\Http\Controllers\Vitrine;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
