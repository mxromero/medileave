<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aprobador extends Model
{
    use HasFactory;

    protected $table = 'aprobadores';
    protected $primaryKey = 'idaprobadores';

    protected $fillable = [
        'Empleado_idFicha',
        'Empleado_Cargo_idCargo',
        'Empleado_Sector_idSector',
        'Empleado_Sector_centros_idcentros',
        'Aprobacion_idAprobacion',
        'Aprobacion_Permisos_idPermiso',
        'Aprobacion_Permisos_fichaUsuario_idFicha',
        'Aprobacion_Permisos_fichaUsuario_Cargo_idCargo',
        'Aprobacion_Permisos_fichaUsuario_Sector_idSector',
        'Aprobacion_Permisos_fichaUsuario_Sector_centros_idcentros',
    ];

    public function empleado()
    {
        return $this->belongsTo(Empleado::class, 'Empleado_idFicha');
    }

    public function cargo()
    {
        return $this->belongsTo(Cargos::class, 'Empleado_Cargo_idCargo');
    }

    public function sector()
    {
        return $this->belongsTo(Sector::class, 'Empleado_Sector_idSector');
    }

    public function centro()
    {
        return $this->belongsTo(Centro::class, 'Empleado_Sector_centros_idcentros');
    }

    public function aprobacion()
    {
        return $this->belongsTo(Aprobacion::class, 'Aprobacion_idAprobacion');
    }

    public function solicitud()
    {
        return $this->belongsTo(Solicitudes::class, 'Aprobacion_Permisos_idPermiso');
    }
}
