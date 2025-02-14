<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $table = 'empleados';
    protected $primaryKey = 'idFicha';

    protected $fillable = [
        'rut',
        'apellidoPaterno',
        'apellidoMaterno',
        'Nombre',
        'Fecha_nacimiento',
        'Fecha_ingreso',
        'calidad',
        'sexo',
        'nacionalidad',
        'categoria',
        'nivel',
        'correo',
        'telefono',
        'direccion',
        'ciudad',
        'codigo_postal',
        'fecha_contratacion',
        'fecha_terminacion',
        'departamento',
        'supervisor_id',
        'estado_civil',
        'numero_hijos',
        'idiomas',
        'numero_seguridad_social',
        'numero_pasaporte',
        'numero_identificacion',
        'contacto_emergencia',
        'telefono_emergencia',
        'relacion_emergencia',
    ];

    public function cargo(){
        return $this->belongsTo(Cargos::class, 'idCargo');
    }

    public function sector(){
        return $this->belongsTo(Sector::class, 'idSector');
    }

    public function centro(){
        return $this->belongsTo(Centro::class, 'idcentros');
    }


}
