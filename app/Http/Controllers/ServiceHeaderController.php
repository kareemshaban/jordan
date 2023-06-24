<?php

namespace App\Http\Controllers;

use App\Models\ServiceHeader;
use Illuminate\Http\Request;

class ServiceHeaderController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $serviceHeader = ServiceHeader::all() -> first();
        return view('cpanel.serviceHeader' , compact('serviceHeader'));
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
            $request->img->move(('images/Services'), $imageName);

            ServiceHeader::create([
                'title' => $request -> title,
                'subtitle' => $request -> subtitle,
                'img' => $imageName

            ]);

            return redirect() -> route('serviceHeader');


        } else {
            $this -> update($request);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ServiceHeader $serviceHeader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ServiceHeader $serviceHeader)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $data = ServiceHeader::find($request -> id);
        if($data){
            if($request -> img){
                $imageName = time()  . '.' . $request->img->extension();
                $request->img->move(('images/Services'), $imageName);
            } else {
                $imageName = $data -> img ;
            }


            $data -> update([
                'title' => $request -> title,
                'subtitle' => $request -> subtitle,
                'img' => $imageName

            ]);

            return redirect() -> route('serviceHeader');

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ServiceHeader $serviceHeader)
    {
        //
    }
}
