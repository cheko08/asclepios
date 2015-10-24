<?php

namespace App;

use Laravel\Cashier\Billable;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Laravel\Cashier\Contracts\Billable as BillableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract,
                                    BillableContract
{
    use Authenticatable, Authorizable, CanResetPassword, Billable;

    protected $dates = ['trial_ends_at', 'subscription_ends_at'];

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
