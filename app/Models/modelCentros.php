<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelCentros extends Model
{
    use HasFactory;


    public function RegionComuna(){

        return $this->belongsTo(modelRegion::class);

    }
}
