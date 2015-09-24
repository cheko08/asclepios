<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Paciente;
use App\Consulta;
use Auth;
use DB;
use App\Http\Requests\CreatePacienteRequest;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $pacientes = Paciente::where('user_id', Auth::user()->id)->get();
        return view('pacientes.index', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pacientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePacienteRequest $request)
    {
        $paciente = Paciente::create($request->all());


        if($paciente)
        {
            $paciente->user_id = Auth::user()->id;
            $paciente->save();
            return redirect('pacientes');
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
        $paciente = Paciente::find($id);
        $consulta = DB::table('consultas')->where('paciente_id', '=', $paciente->id)->orderBy('id','DESC')->first();
        if($consulta)
        {
            $peso_kilos = $consulta->peso_kilos;
            $imc = $consulta->imc;
        }
        else
        {
            $peso_kilos = 0;
            $imc = 0;
        }

        return view('pacientes.show', compact('paciente', 'peso_kilos', 'imc'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreatePacienteRequest $request, $id)
    {
        $paciente = Paciente::findOrFail($id);
        $paciente->fill($request->all());
        $paciente->save();

        return redirect('pacientes')->with('global', 'El paciente ha sido actualizado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $paciente=Paciente::findOrFail($id);
       $paciente->delete();

    }
}
