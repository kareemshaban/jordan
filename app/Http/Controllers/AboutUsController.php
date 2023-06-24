<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
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
        $data = AboutUs::all() -> first();
        return view('cpanel.about' , compact('data'));
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
                'section_txt' => 'required',
                'img' => 'required'
            ]);

            $imageName = time()  . '.' . $request->img->extension();
            $request->img->move(('images/About'), $imageName);

            AboutUs::create([
                'section_txt' => $request -> section_txt,
                'img' => $imageName
            ]);

            return redirect() -> route('aboutUsSection');

        } else {
            return $this -> update($request);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(AboutUs $aboutUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AboutUs $aboutUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $data = AboutUs::find($request -> id);
        if($data){
            if($request -> img){
                $imageName = time()  . '.' . $request->img->extension();
                $request->img->move(('images/About'), $imageName);
            } else {
                $imageName = $data -> img ;
            }


            $data -> update([
                'section_txt' => $request -> section_txt,
                'img' => $imageName
            ]);

            return redirect() -> route('aboutUsSection');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutUs $aboutUs)
    {
        //
    }
}
