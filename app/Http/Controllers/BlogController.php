<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
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
        $blogs = Blog::all();
        return view('cpanel.blogs' , compact('blogs'));
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

        if ($request -> id == 0){
            $validated = $request->validate([
                'title' => 'required',
                'short_details' => 'required',
                'details' => 'required',
                'img' => 'required'
            ]);

            $imageName = time()  . '.' . $request->img->extension();
            $request->img->move(('images/Blogs'), $imageName);

            Blog::create([
                'title' =>  $request -> title,
                'short_details' => $request -> short_details,
                'details' => $request -> details,
                'img' => $imageName
            ]);
        } else {
            $validated = $request->validate([
                'title' => 'required',
                'short_details' => 'required',
                'details' => 'required',
            ]);
            $blog = Blog::find($request -> id);
           if($blog){
               if($request -> img){
                   $imageName = time()  . '.' . $request->img->extension();
                   $request->img->move(('images/Blogs'), $imageName);
               } else {
                   $imageName = $blog ->  img;
               }

               $blog -> update([
                   'title' =>  $request -> title,
                   'short_details' => $request -> short_details,
                   'details' => $request -> details,
                   'img' => $imageName
               ]);

           }

        }

        return redirect() -> route('blogs');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        echo json_encode($blog);
        exit();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        if($blog){
            $blog -> delete();
            return redirect() -> route('blogs');
        }
    }
}
