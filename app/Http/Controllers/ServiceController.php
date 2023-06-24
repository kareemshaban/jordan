<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
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
        $services = Service::all();
        return view('cpanel.service' , compact('services'));
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
            'details' => 'required',
            'img' => 'required'
        ]);

        $imageName = time()  . '.' . $request->img->extension();
        $request->img->move(('images/Services'), $imageName);

        Service::create([
            'name' =>  $request -> name,
            'title' => $request -> name,
            'details' => $request -> details,
            'img' => $imageName
        ]);
        return redirect() -> route('service');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        if($service){
            $service -> delete();
            return redirect() -> route('service');
        }
    }
}
