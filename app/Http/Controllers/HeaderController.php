<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;

class HeaderController extends Controller
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
        $header = Header::all() -> first();
        return view('cpanel.header' , compact('header'));
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
            'start_day' => 'required',
            'end_day' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'contact_phone' => 'required',
            'callback_text' => 'required',
            'white_logo' => 'required',
                 'colored_logo' => 'required'
        ]);

        $imageName = time() . 'white' . '.' . $request->white_logo->extension();
        $request->white_logo->move(('images/Logo'), $imageName);


        $imageName2 = time() . 'colored'.  '.' . $request->colored_logo->extension();
        $request->colored_logo->move(('images/Logo'), $imageName2);
        Header::create([
            'start_day' => $request -> start_day,
            'end_day' => $request -> end_day,
            'start_time' => $request -> start_time,
            'end_time' => $request -> end_time,
            'contact_phone' => $request -> contact_phone,
            'facebook' => $request -> facebook,
            'twitter' => $request -> twitter,
            'linkedin' => $request -> linkedin,
            'whatsapp' => $request -> whatsapp,
            'instegram' => $request -> instegram,
            'g_mail' => $request -> g_mail,
            'callback_text' => $request -> callback_text,
            'white_logo' => $imageName,
            'colored_logo' => $imageName2,
        ]);

        return redirect() -> route('header') ;
        } else {
            return  $this -> update($request);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Header $header)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Header $header)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $header = Header::find($request -> id);
        if($header){

            if($request -> white_logo ){
                $imageName = time() . 'white' . '.' . $request->white_logo->extension();
                $request->white_logo->move(('images/Logo'), $imageName);
            }
           else {
               $imageName = $header -> white_logo;
           }


           if($request -> colored_logo  ){
               $imageName2 = time() . 'colored'.  '.' . $request->colored_logo->extension();
               $request->colored_logo->move(('images/Logo'), $imageName2);
           } else {
               $imageName2 = $header -> colored_logo;
           }


            $header -> update([
                'start_day' => $request -> start_day,
                'end_day' => $request -> end_day,
                'start_time' => $request -> start_time,
                'end_time' => $request -> end_time,
                'contact_phone' => $request -> contact_phone,
                'facebook' => $request -> facebook,
                'twitter' => $request -> twitter,
                'linkedin' => $request -> linkedin,
                'whatsapp' => $request -> whatsapp,
                'instegram' => $request -> instegram,
                'g_mail' => $request -> g_mail,
                'callback_text' => $request -> callback_text,
                'white_logo' => $imageName,
                'colored_logo' => $imageName2,
            ]);
            return redirect() -> route('header') ;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Header $header)
    {
        //
    }
}
