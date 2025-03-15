<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getPorto($slug)
    {
        $portofolio = Portofolio::where('slug', $slug)->first();
        $templateId = $portofolio->template->id;
        $view = 'portofolios.'.$templateId;
        return view($view, compact('portofolio'));
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
    public function show(portofolio $portofolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(portofolio $portofolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, portofolio $portofolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(portofolio $portofolio)
    {
        //
    }
}
