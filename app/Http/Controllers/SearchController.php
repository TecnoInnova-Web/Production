<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use App\Models\Autobus;
use App\Models\Conductor;
use Illuminate\Http\Request;
use Carbon\Carbon;

class SearchController extends Controller
{
    public function index()
    {
        return view('public'); // Vista principal
    }

    public function search(Request $request)
    {
        $searchQuery = $request->input('query');

        // Verificar si el input de búsqueda está vacío
        if (empty($searchQuery)) {
            return view('results')->with('mensaje', 'No se encontraron resultados.');
        }

        // Obtener la fecha actual
        $currentDate = Carbon::now()->format('Y-m-d');

        // Buscar horarios donde el nombre completo del conductor o el modelo del autobús coincidan y la fecha sea la actual
        $horarios = Horario::where(function($q) use ($searchQuery) {
            $q->whereHas('conductor', function($query) use ($searchQuery) {
                $query->where('nombreCompleto', 'LIKE', "%{$searchQuery}%");
            })->orWhereHas('autobus', function($query) use ($searchQuery) {
                $query->where('modelo', 'LIKE', "%{$searchQuery}%");
            });
        })
        ->whereDate('created_at', $currentDate)
        ->with('conductor', 'autobus')
        ->get();

        // Buscar todos los autobuses que coincidan con la búsqueda
        $autobuses = Autobus::where('marca', 'LIKE', "%{$searchQuery}%")
                            ->orWhere('capacidad', 'LIKE', "%{$searchQuery}%")
                            ->orWhere('color', 'LIKE', "%{$searchQuery}%")
                            ->orWhere('placa', 'LIKE', "%{$searchQuery}%")
                            ->get();

        // Buscar todos los conductores que coincidan con la búsqueda
        $conductores = Conductor::where('nombreCompleto', 'LIKE', "%{$searchQuery}%")->get();

        return view('results', compact('horarios', 'autobuses', 'conductores'))->with('i' );
    }
}
