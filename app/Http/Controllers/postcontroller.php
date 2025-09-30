<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        return view('home');
    }

        public function about()
    {
        return view('about');
    }

        public function blog()
    {
        return view('blog');
    }

        public function contact()
    {
        return view('contact');
    }

        public function article1()
    {
        return view('article1');
    }
        public function article2()
    {
        return view('article2');
    }
        public function article3()
    {
        return view('article3');
    }
        public function article4()
    {
        return view('article4');
    }
        public function article5()
    {
        return view('article5');
    }
        public function article6()
    {
        return view('article6');
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
}
