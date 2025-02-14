<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargos extends Model
{
    use HasFactory;

    protected $table = 'cargos';
    protected $primaryKey = 'idCargo';

    protected $fillable = [
        'nombreCargo'
    ];


    public function empleados(){
        return $this->hasMany(Empleado::class, 'idCargo');
    }
}
