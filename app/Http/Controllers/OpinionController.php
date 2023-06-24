<?php

namespace App\Http\Controllers;

use App\Models\Opinion;
use Illuminate\Http\Request;

class OpinionController extends Controller
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
        $opinions = Opinion::all();
        return view('cpanel.opinion' , compact('opinions'));
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
            'role' => 'required',
            'name' => 'required',
            'details' => 'required'
        ]);


        Opinion::create([
            'title' => '',
            'sub_title' => '',
            'role' => $request -> role,
            'name' => $request -> name,
            'details' => $request -> details
        ]);
        return redirect() -> route('opinions');
    }

    /**
     * Display the specified resource.
     */
    public function show(Opinion $opinion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Opinion $opinion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Opinion $opinion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $opinion = Opinion::find($id);
        if($opinion){
            $opinion -> delete();
            return redirect() -> route('opinions');

        }
    }
}
