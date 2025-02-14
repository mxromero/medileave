<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $table = 'regiones';
    protected $primaryKey = 'idRegion';

    protected $fillable = [
        'nombreRegion',
        'status',
    ];
//

    public function centros(){
        return $this->hasMany(Centro::class, 'Region_idregion');
    }
}
