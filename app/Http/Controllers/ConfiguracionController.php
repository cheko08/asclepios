<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\CambiarPasswordRequest;
use Hash;

class ConfiguracionController extends Controller
{
	public function configuracionPersonal()
	{
		$user = User::find(Auth::user()->id);
		return view('configuracion.configuracion-personal', compact('user'));
	}

	public function updateConfiguracionPersonal(UpdateUserRequest $request, $id)
	{
		$user = User::find($id);
		if($request->hasFile('logo_consultorio'))
		{
			if($request->file('logo_consultorio')->isValid())
			{
				$logo_consultorio = $request->file('logo_consultorio')->getClientOriginalName();
				$destinationPath = public_path('logos');
				$request->file('logo_consultorio')->move($destinationPath,$logo_consultorio);
				$user->logo_consultorio = $logo_consultorio;
			}
		}
		$user->nombre = $request->input('nombre');
		$user->apellido_paterno = $request->input('apellido_paterno');
		$user->apellido_materno = $request->input('apellido_materno');
		$user->email = $request->input('email');
		$user->cedula_profesional = $request->input('cedula_profesional');
		$user->telefono = $request->input('telefono');
		$user->telefono_2 = $request->input('telefono_2');
		$user->direccion = $request->input('direccion');
		$user->save();
		return redirect('configuracion/configuracion-personal')->with('global-configuracion', 'El usuario ha sido actualizado');
	}


	public function configuracionSeguridad()
	{
		$user = User::find(Auth::user()->id);
		return view('configuracion.configuracion-seguridad', compact('user'));
	}

	public function cambiarContrasena(CambiarPasswordRequest $request, $id)
	{
		$user         = User::FindOrFail($id);
		$oldPassword  = $request->input('old_password');
		$newPassword  = $request->input('new_password');


		if(Hash::check($oldPassword, $user->password))
		{
			$user->password =bcrypt($newPassword);
			$user->save();

			return redirect('configuracion/configuracion-seguridad')->with('global-configuracion', 'La contraseña ha sido actualizada');;
		}

		return  response('Unauthorized.', 401);
	}
}
