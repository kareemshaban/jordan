<?php

namespace App\Http\Controllers;

use App\Models\ContactHeader;
use Illuminate\Http\Request;

class ContactHeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactHeader = ContactHeader::all() -> first();
        return view('cpanel.contactHeader' , compact('contactHeader'));
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
            $request->img->move(('images/Contact'), $imageName);

            ContactHeader::create([
                'title' => $request -> title,
                'subtitle' => $request -> subtitle,
                'img' => $imageName

            ]);

            return redirect() -> route('contactHeader');


        } else {
            $this -> update($request);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactHeader $contactHeader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactHeader $contactHeader)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, )
    {
        $data = ContactHeader::find($request -> id);
        if($data){
            if($request -> img){
                $imageName = time()  . '.' . $request->img->extension();
                $request->img->move(('images/Contact'), $imageName);
            } else {
                $imageName = $data -> img ;
            }


            $data -> update([
                'title' => $request -> title,
                'subtitle' => $request -> subtitle,
                'img' => $imageName

            ]);

            return redirect() -> route('contactHeader');

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactHeader $contactHeader)
    {
        //
    }
}
