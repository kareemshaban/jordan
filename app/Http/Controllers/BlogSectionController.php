<?php

namespace App\Http\Controllers;

use App\Models\BlogSection;
use Illuminate\Http\Request;

class BlogSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogSection = BlogSection::all() -> first();
        return view('cpanel.blogSection' , compact('blogSection'));
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
                'sub_title' => 'required',
                ]);

            BlogSection::create([
                'title' => $request -> title,
                'sub_title'  => $request -> sub_title
            ]);
            return redirect() -> route('blogSection') ;
        } else {
            return $this -> update($request);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(BlogSection $blogSection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BlogSection $blogSection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $blog = BlogSection::find($request -> id);
        if($blog){
            $blog -> update([
                'title' => $request -> title,
                'sub_title'  => $request -> sub_title
            ]);
            return redirect() -> route('blogSection') ;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogSection $blogSection)
    {
        //
    }
}
