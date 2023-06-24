<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;

class ClientsController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $logos = Clients::all();
        return view('cpanel.clients' , compact('logos'));
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
            'img' => 'required'
        ]);

        $imageName = time()  . '.' . $request->img->extension();
        $request->img->move(('images/Clients'), $imageName);

        Clients::create([
            'img' => $imageName
        ]);
        return redirect() -> route('clients');
    }

    /**
     * Display the specified resource.
     */
    public function show(Clients $clients)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clients $clients)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Clients $clients)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $client = Clients::find($id);
        if($client){
            $client -> delete();
            return redirect() -> route('clients');
        }
    }
}
