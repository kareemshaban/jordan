<?php

namespace App\Http\Controllers;

use App\Models\Statistics;
use Illuminate\Http\Request;

class StatisticsController extends Controller
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
        $data = Statistics::all() -> first();
        return view ('cpanel.statistics' , compact('data'));
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
                'text' => 'required',
                'count1_txt' => 'required',
                'count1_value' => 'required',
                'count2_txt' => 'required',
                'count2_value' => 'required',
                'count3_txt' => 'required',
                'count3_value' => 'required',
                'count4_txt' => 'required',
                'count4_value' => 'required',
            ]);

            Statistics::create([
                'text' => $request -> text,
                'count1_txt' => $request ->count1_txt,
                'count1_value' => $request ->count1_value,
                'count2_txt' => $request ->count2_txt,
                'count2_value' => $request ->count2_value,
                'count3_txt' => $request ->count3_txt,
                'count3_value' => $request ->count3_value,
                'count4_txt' => $request ->count4_txt,
                'count4_value' => $request ->count4_value,
            ]);

            return redirect() -> route('statistics');


        } else {
           return $this -> update($request);

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Statistics $statistics)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Statistics $statistics)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $data = Statistics::find($request -> id);
        if($data){
            $data -> update([
                'text' => $request -> text,
                'count1_txt' => $request ->count1_txt,
                'count1_value' => $request ->count1_value,
                'count2_txt' => $request ->count2_txt,
                'count2_value' => $request ->count2_value,
                'count3_txt' => $request ->count3_txt,
                'count3_value' => $request ->count3_value,
                'count4_txt' => $request ->count4_txt,
                'count4_value' => $request ->count4_value,
            ]);

            return redirect() -> route('statistics');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Statistics $statistics)
    {
        //
    }
}
