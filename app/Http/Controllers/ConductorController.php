<?php

namespace App\Http\Controllers;

use App\Models\Conductor;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ConductorRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Barryvdh\DomPDF\Facade\Pdf;

class ConductorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $conductors = Conductor::paginate(15);

        return view('conductor.index', compact('conductors'))
            ->with('i', ($request->input('page', 1) - 1) * $conductors->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $conductor = new Conductor();

        return view('conductor.create', compact('conductor'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ConductorRequest $request): RedirectResponse
    {

        $request->validate([
            'cedula' => 'required|unique:conductors,cedula',
        ]);
        Conductor::create($request->validated());
        
        return Redirect::route('conductors.index')
            ->with('success', 'Conductor created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $conductor = Conductor::find($id);

        return view('conductor.show', compact('conductor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $conductor = Conductor::find($id);

        return view('conductor.edit', compact('conductor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ConductorRequest $request, Conductor $conductor): RedirectResponse
    {

        $request->validate([
            'cedula' => 'required|unique:conductors,cedula' ,
        ]);
        $conductor->update($request->validated());

        return Redirect::route('conductors.index')
            ->with('success', 'Conductor updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Conductor::find($id)->delete();

        return Redirect::route('conductors.index')
            ->with('success', 'Conductor deleted successfully');
    }

    public function  report(){
        $conductor = Conductor::all();
        $pdf = Pdf::loadView('conductor.report', compact('conductor'));
        return $pdf->stream('Report.pdf');
    }
}
