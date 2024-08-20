<?php

namespace App\Http\Controllers;

use App\Models\AuditoriaEvento;
use Illuminate\Http\Request;

class AuditoriaEventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $evento = AuditoriaEvento::all();
        return view('auditoria.index', compact('evento'));
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
    public function show(AuditoriaEvento $auditoriaEvento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AuditoriaEvento $auditoriaEvento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AuditoriaEvento $auditoriaEvento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AuditoriaEvento $auditoriaEvento)
    {
        //
    }
}
