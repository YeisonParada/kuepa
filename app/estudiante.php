<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estudiante extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'estudiantes';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombres', 'Apellidos', 'Email', 'Telefono', 'Programa','Contacto'];

    
}
