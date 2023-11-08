<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Incidente
 *
 * @property $id
 * @property $area
 * @property $equipo_involucrado
 * @property $fecha
 * @property $horas_solucion
 * @property $created_at
 * @property $updated_at
 *
 * @property Area $area
 * @property Equipo $equipo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Incidente extends Model
{
    
    static $rules = [
		'area' => 'required',
		'equipo_involucrado' => 'required',
		'fecha' => 'required',
		'horas_solucion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['area','equipo_involucrado','fecha','horas_solucion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function area()
    {
        return $this->hasOne('App\Area', 'id', 'area');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function equipo()
    {
        return $this->hasOne('App\Equipo', 'id', 'equipo_involucrado');
    }
    

}
