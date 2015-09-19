<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $guarded = ['id', 'created_at'];
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'consultas';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
     'user_id',
     'paciente_id',
     'dieta_id',
     'cita_id',
     'peso_kilos',
     'imc', 
     'porcentaje_grasa',
     'hidratacion',
     'comentarios'
      ];

    /**
     * 
     *Belongs to Paciente Model
     */
    public function paciente ()
    {
    	return $this->belongsTo('App\Paciente');
    }

    /**
     * 
     *Belongs to User Model
     */
    public function user ()
    {
    	return $this->belongsTo('App\User');
    }

    /**
     * 
     *Belongs to Dieta Model
     */
    public function dieta ()
    {
    	return $this->belongsTo('App\Dieta');
    }

    /**
     * 
     *Belongs to Cita Model
     */
    public function cita ()
    {
    	return $this->belongsTo('App\Cita');
    }
}
