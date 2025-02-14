<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aprobacion extends Model
{
    use HasFactory;

    protected $table = 'aprobaciones';
    protected $primaryKey = 'idAprobacion';

    protected $fillable = [
        'fechaAprobacion',
        'comentario',
        'status',
        'Permisos_idPermiso',
        'Permisos_fichaUsuario_idFicha',
        'Permisos_fichaUsuario_Cargo_idCargo',
        'Permisos_fichaUsuario_Sector_idSector',
        'Permisos_fichaUsuario_Sector_centros_idcentros',
    ];

    public function solicitud()
    {
        return $this->belongsTo(Solicitudes::class, 'idPermiso');
    }

}
