<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $table = 'programas'; 
    
    protected $fillable = [
        'nombre_programa',
        'numero_semestre',
        'profesor_id'
    ];

    protected $hidden = ['created_at', 'updated_at'];

    public function profesor()
    {
    	return $this->belongsTo('App\Models\Profesor');
    }
}
