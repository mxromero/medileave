<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
    use HasFactory;


    protected $table = 'comunas';
    protected $primaryKey = 'idComuna';

    protected $fillable = [
        'nombreComuna',
        'status',
        'Region_idregion',
    ];

    public function region()
    {
        return $this->belongsTo(Region::class, 'Region_idregion');
    }


}
