<?php

namespace App\Http\Controllers;

use App\Models\Autobus;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\AutobusRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Barryvdh\DomPDF\Facade\Pdf;
class AutobusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $autobuses = Autobus::paginate(15);

        return view('autobus.index', compact('autobuses'))
            ->with('i', ($request->input('page', 1) - 1) * $autobuses->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $autobus = new Autobus();

        return view('autobus.create', compact('autobus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AutobusRequest $request): RedirectResponse
    {
        // Validar si la placa ya existe
        $request->validate([
            'placa' => 'required|unique:autobuses,placa',
        ]);
    
        Autobus::create($request->validated());
    
        return Redirect::route('autobuses.index')
            ->with('success', 'Autobus created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $autobus = Autobus::find($id);

        return view('autobus.show', compact('autobus'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $autobus = Autobus::find($id);

        return view('autobus.edit', compact('autobus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AutobusRequest $request, Autobus $autobus): RedirectResponse
    {
        $request->validate([
            'placa' => 'required|unique:autobuses,placa',
        ]);
        $autobus->update($request->validated());

        return Redirect::route('autobuses.index')
            ->with('success', 'Autobus updated successfully');
    }

    public function destroy($id): RedirectResponse
{
    try {
        Autobus::find($id)->delete();
        return Redirect::route('autobuses.index')
            ->with('success', 'Autobus eliminado exitosamente.');
    } catch (\Exception $e) {
        return Redirect::route('autobuses.index')
            ->with('error', 'Error al eliminar el autobus.');
    }
}

    public function report(){
        $autobuses = Autobus::all();
        $pdf = Pdf::loadView('autobus.report', compact('autobuses'))->setPaper('a4', 'landscape'); // Establece el papel en A4 y la orientación en horizontal
        return $pdf->stream('Report.pdf');
    }

}
