<?php

namespace App\Http\Controllers;

// exportamos todos los controladores y modelos  que usaremos 

use App\Models\Horario;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\HorarioRequest;
use App\Models\Autobus;
use App\Models\Conductor;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Barryvdh\DomPDF\Facade\Pdf;
//---------------------------------------------------------------------------------------------
 // Creamos la clase del controlador 
class HorarioController extends Controller
{
  
// Creamos la primera funcion index, que nos mandara a la principal de horarios 
    public function index(Request $request): View
    {
        //llamamos al modelo de horarios para mostrarlo en la vista
        $horarios = Horario::with('conductor:id,nombreCompleto')->paginate();

        //despues nos retornara al horario.index
        return view('horario.index', compact('horarios'))
            ->with('i', ($request->input('page', 1) - 1) * $horarios->perPage());
    }

    //creamos la funcion de create para poder agregar nuevos horarios en la base de datos
    public function create(): View
    {
        //llamamos a los modelos de autobus y conductores para poder mostar la informacion de la relacion
        $horario = new Horario();
        $conductor = Conductor::pluck('nombreCompleto', 'id');
        $autobus = Autobus::pluck('marca','id');

        //retornamos al horario.create
        return view('horario.create', compact('horario', 'conductor', 'autobus'));
    }

  //creamos la funcion store para que mande toda la informacion de create apra almacenar en la base de datos 
    public function store(HorarioRequest $request): RedirectResponse
    {
        // Agregar la fecha de creación
        $data = $request->validated();
        $data['fecha_creacion'] = now(); // Establecer la fecha de creación con la hora actual

        Horario::create($data);

        return Redirect::route('horarios.index')
            ->with('success', 'Horario creado con éxito.');
    }

   //creamos la funcion de show, para podes mostrar toda la inforamcion de ese horario segun la id seleccionada
    public function show($id): View

    {
        //llamamos al modelo de horario donde indica que tiene relacion con el conductor que mostrara el nombre completo y el autobus 
        $horario = Horario::with('conductor:id,nombreCompleto', 'autobus')->find($id);
        return view('horario.show', compact('horario'));
    }

     //creamos la cuncion edit, que agarrara por id, y podremos editarla informacion requerida
    public function edit($id): View
    {
        //llamaos a los 3 modelos para que agarre la relacion y poder editarla
        $horario = Horario::find($id);
        $conductor = Conductor::pluck('nombreCompleto', 'id');
        $autobus = Autobus::pluck('marca','id');

        return view('horario.edit', compact('horario', 'conductor', 'autobus'));
    }

//cremos la funcion de update que guardatra la informacion editada en la base de datos nuevamente
    public function update(HorarioRequest $request, Horario $horario): RedirectResponse
    {
        $horario->update($request->validated());

        return Redirect::route('horarios.index')
            ->with('success', 'Horario actualizado con éxito');
    }
    //cremos la funcion destroy donde se eliminara el horario seleccionado segun la id
    public function destroy($id): RedirectResponse
    {
        Horario::find($id)->delete();

        return Redirect::route('horarios.index')
            ->with('success', 'Horario eliminado con éxito');
    }

    //creamos la funcion de report, que agarrara el controllador dde DOMDF para convertir toda la informacion de la vista de reporte en un documento pdf
    public function report()
    {
        $horario = Horario::all();
        $pdf = Pdf::loadView('horario.report', compact('horario'))
                   ->setPaper('a4', 'landscape'); // Establece el papel en A4 y la orientación en horizontal
        return $pdf->stream('Report.pdf');
    }
}
