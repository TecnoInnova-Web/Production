<?php
// Controlador
namespace App\Http\Controllers;

use App\Models\Autobus;
use App\Models\Horario;
use App\Models\Conductor;
use App\Models\Pregunta; 
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Visit;

class PublicsController extends Controller
{
    public function index(Request $request)
    {
            $pageName = 'public'; // Cambia esto según el contexto

            // Busca la visita existente o crea una nueva
            $visit = Visit::firstOrCreate(
                ['page' => $pageName],
                ['count' => 0]
            );
        
            // Incrementa el conteo de visitas
            $visit->increment('count');
        
            // Obtén los datos necesarios
            $autobuses = Autobus::all();
            $horarios = Horario::all();
            $conductores = Conductor::all();
            $preguntas = Pregunta::all();
            $today = Carbon::today('America/Caracas');
        
            $horarios_hoy = Horario::whereDate('created_at', $today)->get();
        
            $mensaje = $horarios_hoy->isEmpty() ? "No hay horarios disponibles para hoy." : null;
        
            return view('public', compact('autobuses', 'horarios', 'conductores', 'preguntas', 'today', 'horarios_hoy', 'visit'))
                ->with('i');
        }

        public function about()
        {
            $autobuses = Autobus::all();
            $conductores = Conductor::all();
            $imagenes = [
                (object) ['url' => 'img/imagen4.jpg'],
                (object) ['url' => 'img/imagen2.jpg'],
                (object) ['url' => 'img/imagen3.jpg'],
            ];
            return view('about', compact('autobuses', 'conductores', 'imagenes'));
        }

    // Controlador
    public function descargarPDF()
    {
        $rutaArchivo = 'pdf/ManualdeUsuario.pdf'; // Ajusta la ruta según tu configuración
    
        return response()->download($rutaArchivo, 'Manual De Usuario.pdf');
    }
    
}
