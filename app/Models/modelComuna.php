<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelComuna extends Model
{
    use HasFactory;

    public function region()
    {
        return $this->belongsTo(modelRegion::class);
    }

}
