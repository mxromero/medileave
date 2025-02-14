<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centro extends Model
{
    use HasFactory;

    protected $table = 'centros';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nombreCentro',
        'subCentro',
        'idCentroPadre',
        'ubicacionCentro',
        'comuna',
        'fk_userID_deleted',
        'Region_idregion',
        'Empleado_idFicha',
        'Empleado_Cargo_idCargo',
        'Empleado_Sector_idSector',
        'Empleado_Sector_centros_idcentros',
    ];


    public function region()
    {
        return $this->belongsTo(Region::class, 'Region_idregion');
    }


    public function empleados()
    {
        return $this->hasMany(Empleado::class, 'Empleado_idFicha');
    }


}
