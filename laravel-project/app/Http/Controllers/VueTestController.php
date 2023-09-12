<?php

namespace App\Http\Controllers;

use App\Models\VueTest;
use Illuminate\Http\Request;

class VueTestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('vue_test.index');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(VueTest $vueTest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VueTest $vueTest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VueTest $vueTest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VueTest $vueTest)
    {
        //
    }

    public function nenpi()
    {
        return view("gs_kansan.index");
    }
}
