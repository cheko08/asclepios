<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dieta extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'dietas';

    protected $fillable = [
     'nombre',
     'numero_calorias',
     'tipo_dieta',
     'informacion_nutrimental_1',
     'informacion_nutrimental_2',
     'informacion_nutrimental_3',
     'informacion_nutrimental_4',
     'informacion_nutrimental_5',
     'informacion_nutrimental_6',
     'informacion_nutrimental_7',
     'user_id', 
      ];
}
