<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cadres extends Model
{
    use HasFactory;

    public function article() {
        return $this->belongsTo(Articles::class) ;
    }
}
