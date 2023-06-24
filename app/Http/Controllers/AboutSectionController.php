<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use Illuminate\Http\Request;
use function Termwind\render;

class AboutSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $data = AboutSection::all() -> first();
        return view('cpanel.aboutSection' , compact('data'));
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
                'title' => 'required',
                'details' => 'required',
                'img' => 'required'
            ]);
            $imageName = time()  . '.' . $request->img->extension();
            $request->img->move(('images/AboutSection'), $imageName);


            AboutSection::create([
                'title' => $request -> title,
                'details' => $request -> details,
                'img' => $imageName
            ]);
            return  redirect() -> route('aboutSection');

        } else {
            return $this -> update($request);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(AboutSection $aboutSection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AboutSection $aboutSection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

        $data = AboutSection::find($request -> id);
        if($data){
            if($request -> img ){
                $imageName = time()  . '.' . $request->img->extension();
                $request->img->move(('images/AboutSection'), $imageName);
            } else {
                $imageName = $data -> img ;
            }



            $data -> update([
                'title' => $request -> title,
                'details' => $request -> details,
                'img' => $imageName
            ]);
            return  redirect() -> route('aboutSection');


        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutSection $aboutSection)
    {
        //
    }
}
