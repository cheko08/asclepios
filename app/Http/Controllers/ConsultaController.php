<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Consulta;
use App\Paciente;
use App\Http\Requests\CreateConsultaRequest;

class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($paciente_id)
    {
        $paciente = $paciente_id;
        $consultas = Consulta::where('paciente_id', $paciente_id)->orderBy('created_at','DESC')->paginate(15);
        return view('consultas.index', compact('consultas', 'paciente'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexGraficas($paciente_id)
    {
        $paciente = Paciente::find($paciente_id);
        $consultas = Consulta::where('paciente_id', $paciente_id)->orderBy('created_at','DESC')->take(8)->get();
        return view('consultas.index-graficas', compact('consultas', 'paciente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($paciente_id)
    {
        $paciente = $paciente_id;
        return view('consultas.create', compact('paciente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateConsultaRequest $request)
    {
         $consulta = Consulta::create($request->all());


        if($consulta)
        {
            
            return redirect('consultas/'.$consulta->paciente_id)->with('global-configuracion', 'La consulta ha sido creada!');
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consulta = Consulta::findOrFail($id);

        return view('consultas.edit', compact('consulta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateConsultaRequest $request, $id)
    {
        $consulta = Consulta::findOrFail($id);
        $consulta->fill($request->all());
        $consulta->save();

        return redirect('consultas/'.$consulta->paciente_id)->with('global-configuracion', 'Sus cambios han sido guardados!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $consulta=Consulta::findOrFail($id);
        $consulta->delete();
        
    }
}
