<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Paciente;
use Auth;

class ReportesController extends Controller
{
   public function selectPatient()
   {
        $pacientes = Paciente::where('user_id', Auth::user()->id)->get();
        return view('reportes.index', compact('pacientes'));
   }
}
