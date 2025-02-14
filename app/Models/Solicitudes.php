<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitudes extends Model
{
    use HasFactory;
    protected $table = 'solicitudes';
    protected $primaryKey = 'idPermiso';

    protected $fillable = [
        'dias',
        'fecha_desde',
        'fecha_hasta',
        'motivo',
        'tipo_permiso',
        'status',
        'fichaUsuario_idFicha',
        'fichaUsuario_Cargo_idCargo',
        'fichaUsuario_Sector_idSector',
        'fichaUsuario_Sector_centros_idcentros',
    ];

    public function empleado()
    {
        return $this->belongsTo(Empleado::class, 'fichaUsuario_idFicha');
    }

    public function cargo()
    {
        return $this->belongsTo(Cargos::class, 'fichaUsuario_Cargo_idCargo');
    }

    public function sector()
    {
        return $this->belongsTo(Sector::class, 'fichaUsuario_Sector_idSector');
    }

    public function centro()
    {
        return $this->belongsTo(Centro::class, 'fichaUsuario_Sector_centros_idcentros');
    }

}
