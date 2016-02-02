<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Dieta;
use App\Alimento;
use Auth;

class DietaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dietas = Dieta::paginate(15);
        return view('dietas.index', compact('dietas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dietas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nombre  = $request->input('nombre');
        $calorias = $request->input('numero_calorias');
        $tipo_dieta = $request->input('tipo_dieta');

        $dieta = Dieta::create(array(
            'nombre' => $nombre,
            'numero_calorias' => $calorias,
            'tipo_dieta' => $tipo_dieta,
            ));

         if($dieta)
        {
            $dieta->user_id = Auth::user()->id;
            $dieta->save();

            foreach($request->input('alimento_1') as $alimento)
            {
                $alimento = alimento::create(array(
                    'nombre' => $alimento,
                    'dia'  => 'Dia 1',
                    'dieta_id' => $dieta->id,
                    ));
            }

             foreach($request->input('alimento_2') as $alimento)
            {
                $alimento = alimento::create(array(
                    'nombre' => $alimento,
                    'dia'  => 'Dia 2',
                    'dieta_id' => $dieta->id,
                    ));
            }

              foreach($request->input('alimento_3') as $alimento)
            {
                $alimento = alimento::create(array(
                    'nombre' => $alimento,
                    'dia'  => 'Dia 3',
                    'dieta_id' => $dieta->id,
                    ));
            }

              foreach($request->input('alimento_4') as $alimento)
            {
                $alimento = alimento::create(array(
                    'nombre' => $alimento,
                    'dia'  => 'Dia 4',
                    'dieta_id' => $dieta->id,
                    ));
            }

              foreach($request->input('alimento_5') as $alimento)
            {
                $alimento = alimento::create(array(
                    'nombre' => $alimento,
                    'dia'  => 'Dia 5',
                    'dieta_id' => $dieta->id,
                    ));
            }

              foreach($request->input('alimento_6') as $alimento)
            {
                $alimento = alimento::create(array(
                    'nombre' => $alimento,
                    'dia'  => 'Dia 6',
                    'dieta_id' => $dieta->id,
                    ));
            }

              foreach($request->input('alimento_7') as $alimento)
            {
                $alimento = alimento::create(array(
                    'nombre' => $alimento,
                    'dia'  => 'Dia 7',
                    'dieta_id' => $dieta->id,
                    ));
            }




            return redirect('dietas')->with('global-configuracion', 'La dieta ha sido creada!');
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
        $dieta = Dieta::findOrFail($id);
        $alimento_1 = Alimento::where('dieta_id',$dieta->id)->where('dia','Dia 1')->get();
        $alimento_2 = Alimento::where('dieta_id',$dieta->id)->where('dia','Dia 2')->get();
        $alimento_3 = Alimento::where('dieta_id',$dieta->id)->where('dia','Dia 3')->get();
        $alimento_4 = Alimento::where('dieta_id',$dieta->id)->where('dia','Dia 4')->get();
        $alimento_5 = Alimento::where('dieta_id',$dieta->id)->where('dia','Dia 5')->get();
        $alimento_6 = Alimento::where('dieta_id',$dieta->id)->where('dia','Dia 6')->get();
        $alimento_7 = Alimento::where('dieta_id',$dieta->id)->where('dia','Dia 7')->get();

        return view('dietas.show',compact('dieta','alimento_1','alimento_2','alimento_3','alimento_4','alimento_5','alimento_6','alimento_7'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dieta = Dieta::findOrFail($id);
        $alimento_1 = Alimento::where('dieta_id',$dieta->id)->where('dia','Dia 1')->get();
        $alimento_2 = Alimento::where('dieta_id',$dieta->id)->where('dia','Dia 2')->get();
        $alimento_3 = Alimento::where('dieta_id',$dieta->id)->where('dia','Dia 3')->get();
        $alimento_4 = Alimento::where('dieta_id',$dieta->id)->where('dia','Dia 4')->get();
        $alimento_5 = Alimento::where('dieta_id',$dieta->id)->where('dia','Dia 5')->get();
        $alimento_6 = Alimento::where('dieta_id',$dieta->id)->where('dia','Dia 6')->get();
        $alimento_7 = Alimento::where('dieta_id',$dieta->id)->where('dia','Dia 7')->get();

        return view('dietas.edit',compact('dieta','alimento_1','alimento_2','alimento_3','alimento_4','alimento_5','alimento_6','alimento_7'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $consulta=Dieta::findOrFail($id);
        $consulta->delete();
    }
}
