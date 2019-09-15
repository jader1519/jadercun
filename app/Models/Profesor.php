<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $table = 'profesores'; 
    
    protected $fillable = [
        'nombre',
        'apellido',
        'profesion',
        'informacion_adicional'
    ];


    protected $hidden = ['created_at', 'updated_at'];

    protected $casts = ['informacion_adicional' => 'array'];

    protected $appends = ['nombre_completo', 'listado_programa'];

    
    public function programas()
    {
         return $this->hasMany('App\Models\Programa');
    }

    public function getNombreCompletoAttribute()
    {
    	return "{$this->nombre} {$this->apellido}";
    }

    public function getListadoProgramaAttribute()
    {
    	return $this->programas;
    }

    public function setNombreProfesorAttribute($value)
    {
       $this->attributes['nombre'] = ucfirst($value);
    }


}
