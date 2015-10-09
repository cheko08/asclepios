<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCitaRequest;
use App\Http\Requests\UpdateCitaRequest;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Paciente;
use App\Cita;
use Auth;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citas = Cita::where('user_id', Auth::user()->id)->get();
        return view('citas.index', compact('citas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pacientes = Paciente::where('user_id', Auth::user()->id)->get();
        return view('citas.create', compact('pacientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCitaRequest $request)
    {
        


        $paciente_id = $request->input('paciente_id');
        if($request->input('paciente_id') == '')

          {
               $paciente = Paciente::create($request->all());
               $paciente_id = $paciente->id;
               
          }  

          $cita = Cita::create(array(
            'fecha' => $request->input('fecha'),
            'hora_inicio' => $request->input('hora_inicio'),
            'hora_fin' => $request->input('hora_fin'),
            'user_id' => $request->input('user_id'),
            'paciente_id' => $paciente_id,

          ));


        if($cita)
        {

           
            return redirect('citas')->with('global-configuracion', 'La cita ha sido creada!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cita = Cita::findOrFail($id);
        return view('citas.show',compact('cita'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCitaRequest $request, $id)
    {
        $cita = Cita::findOrFail($id);
        $cita->fecha = $request->input('fecha');
        $cita->hora_inicio = $request->input('hora_inicio');
        $cita->hora_fin = $request->input('hora_fin');
        $cita->save();

        return redirect('citas')->with('global-configuracion', 'La cita ha sido actualizada!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $consulta=Cita::findOrFail($id);
        $consulta->delete();
    }
}
