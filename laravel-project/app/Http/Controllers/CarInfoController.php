<?php

namespace App\Http\Controllers;

use App\Models\CarInfo;
use Illuminate\Http\Request;

class CarInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        return view('car_info.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('car_info.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CarInfo $carInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CarInfo $carInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CarInfo $carInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CarInfo $carInfo)
    {
        //
    }
}
