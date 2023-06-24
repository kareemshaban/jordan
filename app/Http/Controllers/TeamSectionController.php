<?php

namespace App\Http\Controllers;

use App\Models\TeamSection;
use Illuminate\Http\Request;

class TeamSectionController extends Controller
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
        $team = TeamSection::all();
        return view('cpanel.team' , compact('team'));
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
            'name' => 'required',
            'role' => 'required',
            'description' => 'required',
            'img' => 'required'
        ]);

        $imageName = time()  . '.' . $request->img->extension();
        $request->img->move(('images/Team'), $imageName);

        TeamSection::create([
            'name' => $request -> name,
            'role' => $request -> role,
            'description' => $request -> description,
            'img' => $imageName
        ]);
        return redirect() -> route('team');
    }

    /**
     * Display the specified resource.
     */
    public function show(TeamSection $teamSection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TeamSection $teamSection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TeamSection $teamSection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $team = TeamSection::find($id);
        if($team){
            $team -> delete();
            return redirect() -> route('team');
        }
    }
}
