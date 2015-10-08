<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateCitaRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        $yesterday = date('Y-m-d', strtotime('-1 days'));
        return [
            'nombre' => 'required_without:paciente_id',
            'apellido_paterno' => 'required_without:paciente_id',
            'celular' => 'required_without:paciente_id',
            'fecha'    => 'required|date|after:'.$yesterday,
            'hora_inicio' => 'required',
            'hora_fin'  => 'required',
        ];
    }
}
