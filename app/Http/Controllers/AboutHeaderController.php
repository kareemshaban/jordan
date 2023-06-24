<?php

namespace App\Http\Controllers;

use App\Models\AboutHeader;
use Illuminate\Http\Request;

class AboutHeaderController extends Controller
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
        $aboutHeader = AboutHeader::all() -> first();
        return view('cpanel.aboutHeader' , compact('aboutHeader'));
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
                'subtitle' => 'required',
                'img' => 'required'
            ]);
            $imageName = time()  . '.' . $request->img->extension();
            $request->img->move(('images/About'), $imageName);

            AboutHeader::create([
                'title' => $request -> title,
                'subtitle' => $request -> subtitle,
                'img' => $imageName

            ]);

            return redirect() -> route('aboutHeader');


        } else {
            $this -> update($request);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(AboutHeader $aboutHeader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AboutHeader $aboutHeader)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $data = AboutHeader::find($request -> id);
        if($data){
            if($request -> img){
                $imageName = time()  . '.' . $request->img->extension();
                $request->img->move(('images/About'), $imageName);
            } else {
                $imageName = $data -> img ;
            }


            $data -> update([
                'title' => $request -> title,
                'subtitle' => $request -> subtitle,
                'img' => $imageName

            ]);

            return redirect() -> route('aboutHeader');

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutHeader $aboutHeader)
    {
        //
    }
}
