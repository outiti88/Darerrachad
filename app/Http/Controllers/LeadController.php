<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LeadController extends Controller
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
        $total = DB::table('leads')->count();
        $leads = DB::table('leads')->where('deleted_at', NULL)->orderBy('created_at', 'DESC')->get();

        return view('lead.index', [
            'leads' => $leads,
            'total' => $total,
        ]);
    }
}
