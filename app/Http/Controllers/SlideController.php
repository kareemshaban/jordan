<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
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
        $slides = Slide::all();
        return view('cpanel.slider' , compact('slides'));
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
        $validated = $request->validate([
            'slideText' => 'required',
            'btnText' => 'required',
            'img' => 'required'
        ]);

        $imageName = time() . '.' . $request->img->extension();
        $request->img->move(('images/Slides'), $imageName);
        Slide::create([
            'slideText' => $request -> slideText,
            'btnText' => $request -> btnText,
            'inUrl' => $request -> inUrl,
            'exUrl' => $request -> exUrl,
            'img' => $imageName
        ]);

        return redirect() -> route('slider') ;
    }

    /**
     * Display the specified resource.
     */
    public function show(Slide $slide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slide $slide)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slide $slide)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $slide = Slide::find($id);
        if($slide){
            $slide -> delete();
            return redirect() -> route('slider') ;

        }
    }
}
