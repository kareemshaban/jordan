<?php

namespace App\Http\Controllers;

use App\Models\ContactInfo;
use Illuminate\Http\Request;

class ContactInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ContactInfo::all() -> first();
        return view('cpanel.contactInfo' , compact('data'));
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
                'phone_txt' => 'required',
                'phone' => 'required',
                'email_txt' => 'required',
                'email' => 'required',
                'location1_txt' => 'required',
                'location1_lang' => 'required',
                'location1_lat' => 'required',
                'location2_txt' => 'required',
                'location2_lang' => 'required',
                'location2_lat' => 'required',
            ]);

            ContactInfo::create([
                'phone_txt' => $request -> phone_txt,
                'phone' => $request ->phone,
                'email_txt' => $request ->email_txt,
                'email' => $request ->email,
                'location1_txt' => $request ->location1_txt,
                'location1_lang' => $request ->location1_lang,
                'location1_lat' => $request ->location1_lat,
                'location2_txt' => $request ->location2_txt,
                'location2_lang' => $request ->location2_lang,
                'location2_lat' => $request ->location2_lat,
            ]);

            return redirect() -> route('contactInfo');


        } else {
         return   $this -> update($request);

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactInfo $contactInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactInfo $contactInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $data = ContactInfo::find($request -> id);
        if($data){
            $data -> update([
                'phone_txt' => $request -> phone_txt,
                'phone' => $request ->phone,
                'email_txt' => $request ->email_txt,
                'email' => $request ->email,
                'location1_txt' => $request ->location1_txt,
                'location1_lang' => $request ->location1_lang,
                'location1_lat' => $request ->location1_lat,
                'location2_txt' => $request ->location2_txt,
                'location2_lang' => $request ->location2_lang,
                'location2_lat' => $request ->location2_lat,
            ]);

            return redirect() -> route('contactInfo');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactInfo $contactInfo)
    {
        //
    }
}
