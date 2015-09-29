<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Paciente extends Model
{

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pacientes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
     'nombre',
     'apellido_paterno',
     'apellido_materno',
     'genero',
     'telefono',
     'celular', 
     'direccion',
     'ciudad',
     'tipo_sangre', 
     'alergias',
     'altura', 
     'fecha_nacimiento',
     'email', 
     'user_id'
      ];

    /**
     * Belongs to User Model
     */
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    /**
     * One to Many relationship to Consultas Model
     */
    public function consultas ()
    {
        return $this->hasMany('App\Consulta');
    }
}
