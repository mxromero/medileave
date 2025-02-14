<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;


    protected $table = 'sectores';
    protected $primaryKey = 'idSector';


    protected $fillable = [
        'CentroPadre',
        'NombreSector',
        'Centros_idCentros',
        'Empleado_idFicha',
        'Empleado_Cargo_idCargo',
        'Empleado_Sector_idSector',
        'Empleado_Sector_centros_idcentros',
        'Reloj_idReloj',
    ];


    public function centro()
    {
        return $this->belongsTo(Centro::class, 'Centros_idCentros');
    }

    public function empleado(){
        return $this->belongsTo(Empleado::class, 'Empleado_idFicha');
    }
}
