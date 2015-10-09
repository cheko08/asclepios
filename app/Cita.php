<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'citas';

     protected $fillable = [
     'paciente_id',
     'user_id',
     'fecha',
     'hora_inicio',
     'hora_fin',
      ];

       public function paciente ()
    {
    	return $this->belongsTo('App\Paciente');
    }
}
