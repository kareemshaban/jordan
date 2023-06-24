<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Footer::all() -> first();
        return view('cpanel.footer' , compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request -> id == 0){
            $validated = $request->validate([
                'company_name' => 'required',
                'about_txt' => 'required',
            ]);



            Footer::create([
                'company_name' => $request -> company_name,
                'about_txt' => $request -> about_txt
            ]);
            return  redirect() -> route('footer');

        } else {
            return $this -> update($request);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Footer $footer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Footer $footer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $data = Footer::find($request -> id);
        if($data){

            $data -> update([
                'company_name' => $request -> company_name,
                'about_txt' => $request -> about_txt
            ]);
            return  redirect() -> route('footer');


        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Footer $footer)
    {
        //
    }
}
