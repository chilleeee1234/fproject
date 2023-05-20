<?php

namespace App\Http\Controllers\Api;

use App\Models\NaviBar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NavigationBarController extends Controller
{
    //<?php

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return NaviBar::all();
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
    public function show(string $id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}


