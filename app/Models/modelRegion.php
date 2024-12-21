<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelRegion extends Model
{
    use HasFactory;

    public function comunas()
    {
        return $this->hasMany(modelComuna::class);
    }

}
