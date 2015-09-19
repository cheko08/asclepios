<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'nombre',
    'apellido_paterno',
    'apellido_materno',
    'cedula_profesional',
    'telefono',
    'telefono_2',
    'direccion',
    'logo_consultorio',
    'email',
    'password'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * One to Many relationship to the Paciente Model
     */
    public function pacientes ()
    {
        return $this->hasMany('App\Paciente');
    }

    /**
     * One to Many relationship to Consultas Model
     */
    public function consultas ()
    {
        return $this->hasMany('App\Consultas');
    }
}
