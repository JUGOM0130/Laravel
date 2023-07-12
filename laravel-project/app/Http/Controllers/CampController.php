<?php

namespace App\Http\Controllers;

use App\Models\Camp;
use Illuminate\Http\Request;

class CampController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $list = Camp::get();

        //下記修正したら表示された
        //return view('todo_list.index', ['todo_lists', $todo_lists]);
        return view('camp.index', ['list' => $list]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('camp.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Camp::create([
            'season_start'=>$request->season_start,
            'season_end'=>$request->season_end,
            'address1'=>$request->address1,
            'place_name'=>$request->place_name,
            'season_A'=>$request->season_A,
            'season_B'=>$request->season_B,
            'season_C'=>$request->season_C,
            'season_D'=>$request->season_D,
            'is_entry_car'=>$request->is_entry_car ?? false,
            'is_reserve'=>$request->is_reserve ?? false,
            'comment'=>$request->comment
        ]);

        return view('camp.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Camp $camp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Camp $camp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Camp $camp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Camp $camp)
    {
        //
    }
}
