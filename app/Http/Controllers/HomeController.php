<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('home.index');
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
    public function about()
    {
        //
        return view('home.about');
    }
    public function agents()
    {
        //
        return view('home.agents');
    }
    public function blog()
    {
        //
        return view('home.blog');
    }
    public function blogdetails()
    {
        //
        return view('home.blogdetails');
    }
    public function buysalerent()
    {
        //
        return view('home.buysalerent');
    }
    public function contact()
    {
        //
        return view('home.contact');
    }
    public function propertyDetail()
    {
        //
        return view('home.property-detail');
    }
    public function register()
    {
        //
        return view('home.register');
    }
}
