<?php

namespace App\Http\Controllers;

use App\Models\SiteAnalysis;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $visits = SiteAnalysis::all();
        $data = [
            'total_users' => 1500 ,
            'new_users' => 50 ,
            'total_countries' => 12,
            'new_countries' => 4 ,
            'total_emails' => 120 ,
            'new_emails' => 29
        ];
        return view('home' , compact('data' , 'visits'));
    }

}
